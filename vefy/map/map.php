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
        <div id="menu_wrap" class="bg_white">
            <div class="text">
                <h4>Map</h4>
                <p>채식 맛집 검색해서 맛있게 먹어봐요!</p>
            </div>
            <div class="option">
                <div>
                    <form class="map_form" onsubmit="searchPlaces(); return false;">
                        <input class="search_map" type="text" value="베피" id="keyword" size="35">
                        <button class="map_btn22" onclick="btn(); return false;" type="submit">검색하기</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="map__wrap">
            <div id="map" class="vefy_map">
                <!-- <img src="../assets/img/지도.jpg" alt="이미지">
                <div class="vefy_map_location"><img src="../assets/img/베피 영등포 분점.png" alt="베피 영등포 분점"></div>
                <div class="vefy_map_location2"><img src="../assets/img/베피 본점.png" alt="베피 본점"></div>
                <div class="vefy_map_location3"><img src="../assets/img/베피 안양 분점.png" alt="베피 안양 분점"></div> -->


            </div>
            <div class="search_mapp">
                <ul id="placesList"></ul>
                <div id="pagination"></div>
            </div>
        </div>
        <!-- <div class="vefy_desc_Wrap">
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
        </div>
        <div class="vefy_location">
            <div class="location">베피 본점</div>
            <div class="location">베피 영등포 분점</div>
            <div class="location">베피 안양 분점</div>
        </div> -->
        <div class="restaurant">
            <h2>지역별 맛집</h2>
            <div class="restaurantList">
                <span class="active ">서울</span>
                <span>의정부</span>
                <span>속초</span>
                <span>대구</span>
                <span>부산</span>
                <span>제주도</span>
            </div>
            <div class="restaurantLocation">
                <div class="restaurantLocationWrap">
                    <div class="LocationWrap">
                        <div>1.띵크비건(양식) - 서울특별시 마포구 월드컵로13길 55</div>
                        <div>2.마히나 비건 테이블(이탈리아 음식) - 서울특별시 강남구 논현로175길 75 2층</div>
                        <div>3.비건헤븐(양식) - 서울특별시 강동구 성안로 41</div>
                        <div>4.해밀 비건베이커리(베이커리) - 서울특별시 마포구 동교로19길 101 1층</div>
                        <div>5.라페름(브런치) - 서울 용산구 이태원로54길 32</div>
                        <div>6.알라보(샐러드) - 서울특별시 강남구 테헤란로 129 강남N타워 1층</div>
                        <div>7.칙피스(샐러드) - 서울특별시 강남구 강남대로152길 69</div>
                        <!-- <div>매장 내 식사 · 테이크 아웃</div> -->
                    </div>
                    <!-- <div class="LocationImg">
                        <img src="../assets/img/지도.jpg" alt="">
                    </div> -->
                </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript"
        src="//dapi.kakao.com/v2/maps/sdk.js?appkey=c281c269eaf3a50b4355bad3cbd27761&libraries=services"></script>
    <script src="../assets/js/map.js"></script>
    <script>
        // 탭메뉴
        const tabLocation = document.querySelectorAll(".location");
        const tabDesc = document.querySelectorAll(".vefy_desc");
        const tabSearch = document.querySelector(".map_btn22");
        const tabSearchMap = document.querySelector(".search_mapp");

        function btn() {
            tabSearch.addEventListener("click", (e) => {
                e.prenvetDefault();
                tabSearchMap.style.zIndex = "2";
            });
        };

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
    </script>
</body>

</html>