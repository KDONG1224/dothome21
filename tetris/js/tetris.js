import BLOCKS from "./blocks.js"

//  DOM선택
const playgrounds = document.querySelector(".playground");
const playground = document.querySelector(".playground > ul");
const gameText = document.querySelector(".game-text");
const scoreDisplay = document.querySelector(".score");
const restartButton = document.querySelector(".game-text > button");
const pauseButton = document.querySelector(".pause > button");
const playButton = document.querySelector(".play > button");

//Setting
const Game_ROWS = 20;
const Game_COLS = 10;

//variables
let score = 0;
let overScore = 0;
let duration = 500;
let downInterval;
let tempMovingItem;

const movingItem = {
    type: "tree",
    direction: 3,
    top: 0,
    left: 0,
};

init()

//functions
function init(){
    // blockArray.forEach(block => {
    //     console.log(block[0])
    // })
    score=0;
    tempMovingItem = { ...movingItem };
    for(let i=0; i<20; i++){
        // console.log(i)
        prependNewLine()
    }
    generateNewBlock()
}

function prependNewLine(){
    const li = document.createElement("li");  // 20번의 li를 넣기위해 li요소를 만듬
    const ul = document.createElement("ul");  // li안에 10번의 ul를 넣기위해 ul요소를 만듬
    for(let j=0; j<Game_COLS; j++){                  // ul안에 10개의 li를 만들기 위해 반복문 사용
        const matrix = document.createElement("li");  // 반복문안에 하나의 작은 네모를 만들기 위해 li요소를 만듬
        ul.prepend(matrix);                   // matrix를 ul에 prepend시킴
    }
    li.prepend(ul)                            // matrix를 ul에 prepend시킨걸 다시 li에 넣음
    playground.prepend(li)                    // matrix를 ul에 prepend시킨걸 다시 li에 넣은걸 다시 ul에 넣음
}

//블럭 랜더링 함수
function renderBlocks(moveType = ""){
    const { type, direction, top, left} = tempMovingItem;
    const movingBlocks = document.querySelectorAll(".moving");
    movingBlocks.forEach(moving => {
        moving.classList.remove(type, "moving");
    })

    BLOCKS[type][direction].some(block => {
        const x = block[0] + left;
        const y = block[1] + top;
        const target = playground.childNodes[y] ? playground.childNodes[y].childNodes[0].childNodes[x] : null;
        const isAvailable = checkEmpty(target);
        if (isAvailable){
            target.classList.add(type, "moving");
        } else {
            tempMovingItem = { ...movingItem }
            if(moveType === 'retry'){
                clearInterval(downInterval)
                showGameoverText()
            }
            setTimeout(()=>{
                renderBlocks('retry');
                if(moveType === "top"){
                    seizeBlock();
                }
            },0)
            return true;
        }
    })
    movingItem.left = left;
    movingItem.top = top;
    movingItem.direction = direction;
}
function seizeBlock(){
    const movingBlocks = document.querySelectorAll(".moving");
    
    movingBlocks.forEach(moving => {
        moving.classList.remove("moving");
        moving.classList.add("seized");
    })
    checkMatch()
}
function checkMatch(){

    const childNodes = playground.childNodes;
    childNodes.forEach(child => {
        let matched = true;
        child.children[0].childNodes.forEach(li => {
            if(!li.classList.contains("seized")){
                matched = false;
            }
        })
        if(matched){
            child.remove();
            prependNewLine();
            score++;
            scoreDisplay.innerText = score;
        }
    })
    generateNewBlock()
}

function generateNewBlock(){

    clearInterval(downInterval);
    downInterval = setInterval(()=>{
        moveBlock('top' , 1)
    }, duration)

    const blockArray = Object.entries(BLOCKS);
    const randomIndex = Math.floor(Math.random() * blockArray.length)

    movingItem.type = blockArray[randomIndex][0];
    movingItem.top = 0;
    movingItem.left = 3;
    movingItem.direction = 0;
    tempMovingItem = { ...movingItem };
    renderBlocks()
}

function checkEmpty(target){
    if(!target || target.classList.contains("seized")){
        return false;
    }
    return true;
}

function moveBlock(moveType, amount){
    tempMovingItem[moveType] += amount;
    renderBlocks(moveType);
}

function chageDirection(){
    const direction = tempMovingItem.direction;
    direction === 3 ? tempMovingItem.direction = 0 : tempMovingItem.direction += 1;
    renderBlocks();
}

function dropBlock(){
    clearInterval(downInterval);
    downInterval = setInterval(()=>{
        moveBlock("top", 1)
    }, 10)
}

function showGameoverText(){
    gameText.style.display = "flex";
}

// event handling
document.addEventListener("keydown", function(e){
    switch(e.keyCode){
        case 39 : 
            moveBlock("left", 1);
            break;
        case 37 :
            moveBlock("left", -1);
            break;
        case 40 :
            moveBlock("top", 1);
            break;
        case 38 :
            chageDirection();
            break;
        case 32 :
            dropBlock();
            break;
        default :
            break;
    }
})

restartButton.addEventListener("click", function(){
    playground.innerHTML = "";
    gameText.style.display = "none";
    scoreDisplay.innerText = overScore;
    init()
})

function start() {
    reset();
    gameStatus = 'A';
    window.addEventListener('keydown', keyHandler);
    setNextBlock();
    repeatMotion(0);
}

function reset() {
    matrixMainBoard = initMatrix(ROWS_MAIN_BOARD, COLS_MAIN_BOARD);
    time = 0;
    timeForRemovingLines = 0;
    mainBlock = null;
    nextBlock = null;
}

pauseButton.addEventListener("click",function(){
    clearTimeout(downInterval);
    window.cancelAnimationFrame(renderBlocks);
})