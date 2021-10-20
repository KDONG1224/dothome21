//modal - PE02
function modalPE02(){
    document.querySelector(".parallax .source02 button").addEventListener("click", function(){
        document.querySelector("#modal").classList.remove("hide");
        document.querySelector("#modal").classList.add("show");
        document.querySelector(".view-cont > div:nth-child(1)").classList.add("active");
    });
    
    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });
}
function modalPE03(){
    document.querySelector(".parallax .source02.bt button").addEventListener("click", function(){
        document.querySelector("#modal").classList.remove("hide");
        document.querySelector("#modal").classList.add("show");
        document.querySelector(".view-cont > div:nth-child(1)").classList.add("active");
    });
    
    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });
}

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