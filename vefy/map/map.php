<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>지도</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/map.css">
</head>

<body>
    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

    <div class="container">
        <div class="vefy_location">
            <div class="location" onclick="setCenter()">베피 본점</div>
            <div class="location" onclick="panTo()">베피 영등포 분점</div>
            <div class="location" onclick="NextMap()">베피 안양 분점</div>
        </div>
        <div class="vefy_desc_Wrap">
            <div class="vefy_desc">
                <div class="vefy_adress">베피 본점</div>
                <div class="vefy_adress2">주소 : 경기 안산시 단원구 고잔2길 45 6층</div>
                <div class="vefy_adress3">매장영업시간: 월 ~ 금 : 09 : 00 ~ 21 : 00, 토,일 : 10 : 00 ~ 19 : 00</div>
                <div class="vefy_call">
                    <img src="http://www.saladykorea.com/superboard/skin/company/basic/images/ico-tel.gif">Tel : 031 - 365 - 5008</div>
            </div>
            <div class="vefy_desc">
                <div class="vefy_adress">베피 영등포 분점</div>
                <div class="vefy_adress2">주소 : 서울특별시 영등포구 xxx xxx xxx</div>
                <div class="vefy_adress3">매장영업시간: 월 ~ 금 : 09 : 00 ~ 21 : 00, 토,일 : 10 : 00 ~ 19 : 00</div>
                <div class="vefy_call"><img src="http://www.saladykorea.com/superboard/skin/company/basic/images/ico-tel.gif">Tel : 02 - xxx - xxxx</div>
            </div>
            <div class="vefy_desc">
                <div class="vefy_adress">베피 안양 분점</div>
                <div class="vefy_adress2">주소 : 경기도 안양시 xxx xxx xxx</div>
                <div class="vefy_adress3">매장영업시간: 월 ~ 금 : 09 : 00 ~ 21 : 00, 토,일 : 10 : 00 ~ 19 : 00</div>
                <div class="vefy_call"><img src="http://www.saladykorea.com/superboard/skin/company/basic/images/ico-tel.gif">Tel : 032 - xxx - xxxx</div>
            </div>
            <div id="map" class="vefy_map">
                <!-- <img src="../assets/img/지도.jpg" alt="이미지">
                <div class="vefy_map_location"><img src="../assets/img/베피 영등포 분점.png" alt="베피 영등포 분점"></div>
                <div class="vefy_map_location2"><img src="../assets/img/베피 본점.png" alt="베피 본점"></div>
                <div class="vefy_map_location3"><img src="../assets/img/베피 안양 분점.png" alt="베피 안양 분점"></div> -->
                <p class="map_level">
                    <button onclick="zoomIn()">줌인</button>
                    <button onclick="zoomOut()">줌아웃</button>
                    <span id="maplevel"></span>
                </p>
            </div>
            <div id="menu_wrap" class="bg_white">
                <div class="option">
                    <div>
                        <form onsubmit="searchPlaces(); return false;">
                            키워드 : <input type="text" value="이태원 맛집" id="keyword" size="15"> 
                            <button type="submit">검색하기</button> 
                        </form>
                    </div>
                </div>
                <hr>
                <ul id="placesList"></ul>
                <div id="pagination"></div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer id="footer">
    <?php
        include "../include/footer.php";
    ?>
    </footer>
    <!-- //footer -->
    
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c281c269eaf3a50b4355bad3cbd27761"></script>
    <script src="../assets/js/map.js"></script>
    <script>
        // 탭메뉴
        const tabLocation = document.querySelectorAll(".location");
        const tabDesc = document.querySelectorAll(".vefy_desc");

            tabLocation.forEach((element, index) => {
                element.addEventListener("click", function () {

                    tabLocation.forEach(el => {
                        el.classList.remove("active")
                    });
                    element.classList.add("active")
                
                    tabDesc.forEach(el => {
                    el.style.display = "none";
                })
                tabDesc[index].style.display = "block";
            })
        });
    </script>
</body>

</html>