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

//창이 열릴때마다 실행하라
window.onload = function() {
    agentCheck();
}

//mozilla/5.0 (windows nt 10.0; wow64; trident/7.0; .net4.0c; .net4.0e; .net clr 2.0.50727; .net clr 3.0.30729; .net clr 3.5.30729; zoom 3.6.0; rv:11.0) like gecko
//mozilla/5.0 (compatible; msie 10.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/5.0 (compatible; msie 9.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/4.0 (compatible; msie 8.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/4.0 (compatible; msie 7.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/5.0 (windows nt 6.1; win64; x64) applewebkit/537.36 (khtml, like gecko) chrome/88.0.4324.150 safari/537.36 edg/88.0.705.63
//mozilla/5.0 (windows nt 6.1; win64; x64) applewebkit/537.36 (khtml, like gecko) chrome/88.0.4324.150 safari/537.36
//mozilla/5.0 (macintosh; intel mac os x 11_2_1) applewebkit/537.36 (khtml, like gecko) chrome/88.0.4324.150 safari/537.36
//mozilla/5.0 (macintosh; intel mac os x 10_16_0) applewebkit/537.36 (khtml, like gecko) chrome/83.0.4103.106 whale/2.8.108.15 safari/537.36
//mozilla/5.0 (macintosh; intel mac os x 10_15_6) applewebkit/605.1.15 (khtml, like gecko) version/14.0.3 safari/605.1.15
//Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0

//mozilla/5.0 (windows nt 10.0; wow64; trident/7.0; .net4.0c; .net4.0e; .net clr 2.0.50727; .net clr 3.0.30729; .net clr 3.5.30729; zoom 3.6.0; rv:11.0) like gecko
//mozilla/5.0 (compatible; msie 10.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/5.0 (compatible; msie 9.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/4.0 (compatible; msie 8.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//mozilla/4.0 (compatible; msie 7.0; windows nt 6.1; wow64; trident/7.0; slcc2; .net clr 2.0.50727; .net clr 3.5.30729; .net clr 3.0.30729; media center pc 6.0; .net4.0c; infopath.3; .net4.0e)
//Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36 Edg/92.0.902.84

//mozilla/5.0 (iphone; cpu iphone os 14_4 like mac os x) applewebkit/605.1.15 (khtml, like gecko) version/14.0.3 mobile/15e148 safari/604.1
//Mozilla/5.0 (Linux; Android 9; SM-G955N Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/75.0.3770.89 Mobile Safari/537.36
//Mozilla/5.0 (Ipad; CPU OS 13_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/79.0.3945.73 Mobile/15E148 Safari/ 604.1
//Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/24.1 Safari/605.1.15
//Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Safari/605.1.15

//userAgent 호환성 체크
function agentCheck(){
    const agent = navigator.userAgent.toLowerCase();

    //os구분 - 객체화 
    const browserList = {
        mac: agent.match(/macintosh/i),
        windows: agent.match(/windows/i),
        iphone: agent.match(/iphone/i),
        android: agent.match(/android/i),
        ipad: agent.match(/ipad/i),
        ie7: agent.match(/msie 7.0/i),
        ie8: agent.match(/msie 8.0/i),
        ie9: agent.match(/msie 9.0/i),
        ie10: agent.match(/msie 10.0/i),
        ie11: agent.match(/rv:11.0/i),
        edg: agent.match(/edg/i),
        chrome: agent.match(/chrome/i),
        safari: agent.match(/safari/i),
        firefox: agent.match(/firefox/i),
        opera: agent.match(/opera/i),
        whale: agent.match(/whale/i)
    };

    for(prop in browserList){
        if(browserList[prop]){
            // console.log(prop)
            document.querySelector("body").classList.add(prop);
            // document.getElementsByTagName("body").classList.add(prop);  옛날방식
        }
    }
};


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

//paraScroll
// $(window).scroll(function(){
//     let scrollTop = $(window).scrollTop();
//     $(".paraScroll span").text(parseInt(scrollTop) + "px");
// });

// modal
// $(".btn-wrap button").click(function(){
//     $("#modal").removeClass().addClass("show")
// });
// $(".modal-cont button").click(function(){
//     $("#modal").addClass("hide")							  
// });

function modal(){
    document.querySelector(".info button").addEventListener("click", function(){
        document.querySelector("#modal").classList.remove("hide");
        document.querySelector("#modal").classList.add("show");
        document.querySelector(".view-cont > div:nth-child(1)").classList.add("active");
    });
    
    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });
}

//modal - PE01
function modalPE01(){
    document.querySelector(".parallax .source button").addEventListener("click", function(){
        document.querySelector("#modal").classList.remove("hide");
        document.querySelector("#modal").classList.add("show");
        document.querySelector(".view-cont > div:nth-child(1)").classList.add("active");
    });
    
    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });
}

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


