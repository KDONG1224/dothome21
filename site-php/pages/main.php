<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- //style -->
</head>
<body>
    <!-- skipMenu -->
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skipMenu -->

    <!-- header -->
    <header id="header">
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

    <!-- contents -->
    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <article class="content-article">
                <h3>해양레저스포츠! 그 즐거움 속으로</h3>
                <p>물이 무서운 당신! 물을 좋아하는 당신! 수상스포츠 안전하게 함께 즐겨봐요!</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="#">
                                <img src="../assets/img/img06.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>카약</strong>
                                <span>짐승의 뼈와 가죽으로 배을 만들어 타던것이 기원이다. <br> 양날 노를 사용하는게 특징이다.</span>
                                <span class="keyword">
                                    <span>#카약</span><span>#카누</span><span>#패들</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img07.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>SUP</strong>
                                <span>보드위에서 무릎을 꿇고 스트로크를 하는 스포츠<br>서핑의 파생물이라고 할 수 있다.</span>
                                <span class="keyword">
                                    <span>#SUP</span><span>#패들보드</span><span>#서핑</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img08.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>고무보트</strong>
                                <span>PVC나 고무로 만든 보트를 타고 계곡이나 강의 급류를 타는 레포츠</span>
                                <span class="keyword">
                                    <span>#래프팅</span><span>#고무보트</span><span>#계곡</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article">
                <h3 class="ir_so">해양레저스포츠 설명</h3>
                <section class="section-intro container">
                    <h4 class="ir_so">해양레저스포츠 소개</h4>
                    <div class="youtube-intro">
                        <div>
                            <iframe src="https://www.youtube.com/embed/TAc6h89l8SY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5>해양레저스포츠 어떻게 즐겨야 할까?</h5>
                            <p>수상레저체험 아카데미의 홍보영상으로 함께 해양레저스포츠에 대해서 알아봅시다. 우리 주변 쉽게 즐길 수 있습니다.
                            </p>
                            <div class="interview">
                                <div class="icon">
                                    <a href="https://www.youtube.com/embed/TAc6h89l8SY" target="_blank">
                                        <img src="../assets/img/svg-pizza.svg" alt="카약">
                                        <span>#카약</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="https://www.youtube.com/embed/TAc6h89l8SY" target="_blank">
                                        <img src="../assets/img/svg-vanilla-cupcake.svg" alt="SUP">
                                        <span>#SUP</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                    <a href="https://www.youtube.com/embed/TAc6h89l8SY" target="_blank">
                                        <img src="../assets/img/svg-pear.svg" alt="래프팅">
                                        <span>#래프팅</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                    <a href="https://www.youtube.com/embed/TAc6h89l8SY" target="_blank">
                                        <img src="../assets/img/svg-cherries.svg" alt="자전거">
                                        <span>#자전거</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                    <a href="https://www.youtube.com/embed/TAc6h89l8SY" target="_blank">
                                        <img src="../assets/img/svg-bread-egg.svg" alt="안전선">
                                        <span>#안전선</span>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="content-article content-sub">
                <h3>해양레저스포츠 종류</h3>
                <p>해양레저스포츠의 종류를 알아 보아요.</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list2">
                        <li>
                            <a href="#">
                                <img src="../assets/img/img06.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>해양스포츠를 즐기는 가장 쉬운 방법입니다.</strong>
                                <span class="keyword">
                                    <span>#초보</span><span>#카약</span><span>#해피</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img07.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>패들보드-SUP 타는 방법</strong>
                                <span class="keyword">
                                    <span>#SUP</span><span>#패들보드</span><span>#서핑</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img08.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>해양레저스포츠 잘 즐기는 방법?</strong>
                                <span class="keyword">
                                    <span>#바다</span><span>#강</span><span>#저수지</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img09.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>내가 해양레저스포츠 즐기는 방법은?</strong>
                                <span class="keyword">
                                    <span>#상주</span><span>#충주</span><span>#강원</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img10.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>카약을 타는 방법은?</strong>
                                <span class="keyword">
                                    <span>#카약</span><span>#패들</span><span>#무동력</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/image03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>안전하게 즐기는 방법은?</strong>
                                <span class="keyword">
                                    <span>#생존수영</span><span>#구명조끼</span><span>#구명도구들</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/image04.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>수상스키를 타는 방법은?</strong>
                                <span class="keyword">
                                    <span>#수상스키</span><span>#웨이크보드</span><span>#모터보트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/image08.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>카약과 카누의 차이점은?</strong>
                                <span class="keyword">
                                    <span>#카누</span><span>#카약</span><span>#충북 진천</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article content-sub">
                <h3>최신 소식</h3>
                <p>최신 소식을 바로 확인 할 수 있습니다.</p>
                <section class="section-news container">
                    <div class="news">
                        <h4>게시판 업데이트</h4>
                        <ul>
                            <?php
                                $sql = "SELECT myBoardID, boardTitle, regTime FROM myBoard ORDER BY myBoardID DESC LIMIT 4";
                                $result = $connect -> query($sql);

                                while( $info = mysqli_fetch_array($result) ){
                            ?>
                                    <li><a href="#"><?= $info['boardTitle'] ?></a><span><?= date('Y-m-d H:i', $info['regTime']) ?></span></li>
                            <?php
                                };
                            ?>
                            <!-- <li><a href="#">스크립트 강의 업데이트 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">유튜브에 강의 업데이트할 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 참여에 대해서 자세히 알려드립니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 강의와 면접 잘 보는 법에 대해서 알려드릴께요~</a><span>2021.02.02</span></li> -->
                        </ul>
                        <a href="board.html" title="더보기" class="more">더보기</a>
                    </div>
                    <div class="news">
                        <h4>댓글 업데이트</h4>
                        <ul>
                            <?php
                                $sql = "SELECT myCommentID, youText, regTime FROM myComment ORDER BY myCommentID DESC LIMIT 4";
                                $result = $connect -> query($sql);

                                while( $info = mysqli_fetch_array($result) ){
                            ?>
                                    <li><a href="#"><?= $info['youText'] ?></a><span><?= date('Y-m-d H:i', $info['regTime']) ?></span></li>
                            <?php
                                };
                            ?>
                            <!-- <li><a href="#">감사합니다. 잘 보고 있어요^^</a><span>2021.02.02</span></li>
                            <li><a href="#">앞으로도 좋은 영상 부탁드령요~</a><span>2021.02.02</span></li>
                            <li><a href="#">여기가 짱인듯.. 너무 좋아요~~ 너무 필요한 거였어요~ 여기가 짱인듯.. 너무 좋아요~~ </a><span>2021.02.02</span></li>
                            <li><a href="#">앞으로도 좋은 영상 부탁드령요~</a><span>2021.02.02</span></li> -->
                        </ul>
                        <a href="comment.html" title="더보기" class="more">더보기</a>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <!-- footer -->
    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>