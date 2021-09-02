// button
// {
//     $(".bottom button").click(function(){
//         $("#modal").removeClass().addClass("show")
//     });

//     document.querySelector(".bottom button").addEventListener("click",()=>{ 
//         document.querySelector("#modal").classList.add("show");
//         document.querySelector("#modal.hide").classList.remove("hide");
//     });


//     $(".modal-cont button").click(function(){
//         $("#modal").addClass("hide")							  
//     });
    
//     document.querySelector(".modal-cont button").addEventListener("click",()=>{
//         document.querySelector("#modal").classList.add("hide");
//     });
// }

//Tab - jquery
const tabBtn = $(".tab-btn ul li");         //5개의 버튼을 변수에 저장 -> 할당
const tabCont = $(".tab-cont > div");       //5개의 컨텐츠를 변수에 저장 -> 할당

// 1. 버튼을 클릭하면 클릭한 버튼한테 active 추가
// 2. 버튼을 클릭하지 않은 다른 버튼은 active 제거
// 3. 버튼 인덱스 설정
// 4. 1번째 버튼은 1번째 컨텐츠 연결(버튼 인덱스 별 해당 컨텐츠 연결)
// 5. 모든 컨텐츠를 안보이게 설정
// 6. 클릭한 버튼의 해당 컨텐츠만 보이게 설정

tabBtn.click(function(){
    let target = $(this);                   //this 내가 클릭한 대상 -> btn -> li
    tabBtn.removeClass("active");
    target.addClass("active");

    let index = target.index();
    // alert(index);
    tabCont.css("display","none");
    tabCont.eq(index).css("display","block");
});


//Code view
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((el) => {
        hljs.highlightElement(el);
    });
});

//Code tab menu
const tabTitle = document.querySelectorAll(".view-title ul li");
const tabMenu = document.querySelectorAll(".view-cont > div");

tabTitle.forEach((element,index) => {
    element.addEventListener("click", function(){

        tabTitle.forEach(el => {
            el.classList.remove("active");
        })

        element.classList.add("active");

        tabMenu.forEach(el => {
            el.style.display = "none";
        })
        tabMenu[index].style.display = "block";
    });
});

// modal
// $(".btn-wrap button").click(function(){
//     $("#modal").removeClass().addClass("show")
// });
// $(".modal-cont button").click(function(){
//     $("#modal").addClass("hide")							  
// });

document.querySelector(".info button").addEventListener("click", function(){
    document.querySelector("#modal").classList.remove("hide");
    document.querySelector("#modal").classList.add("show");
    document.querySelector(".view-cont > div:nth-child(1)").classList.add("active");
});

document.querySelector(".modal-cont button").addEventListener("click", function(){
    document.querySelector("#modal").classList.add("hide");
});
