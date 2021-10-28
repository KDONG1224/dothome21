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
    <title>댓글</title>

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
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <h3>해양레저스포츠! 그 즐거움 속으로</h3>
                <p>물이 무서운 당신! 물을 좋아하는 당신! 수상스포츠 안전하게 함께 즐겨봐요!</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="#">
                                <img src="../assets/img/img06.jpg" alt="카약 이미지입니다">
                            </a>
                            <div class="item">
                                <strong>칵테일(Cocktail)</strong>
                                <span>짐승의 뼈와 가죽으로 배을 만들어 타던것이 기원이다.<br>양날 노를 사용하는게 특징이다.</span>
                                <span class="keyword">
                                    <span>#카약</span><span>#카누</span><span>#패들</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/img07.jpg" alt="SUP 이미지입니다.">
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
                                <img src="../assets/img/img08.jpg" alt="고무보트 이미지입니다.">
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

            <article class="flow-article content-sub">
                <h3>해양레저스포츠 공유하기</h3>
                <p>해양레저스포츠 즐기는 방법을 공유해주세요!</p>
                <section id="comment" class="section-commnet">
                    <h4 class="ir_so">댓글 콘텐츠</h4>
                    <div class="comment-form">
                        <form action="commenSave.php" method="post" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글 영역</legend>
                                <div class="comment-wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input_write2" placeHolder="이름" autocomplete="off" maxlength="10" required>
                                    </div>
                                    <div>
                                        <label for="youText" class="ir_so">해양레저스포츠 방법</label>
                                        <input type="text" name="youText" id="youText" class="input_write2 w100" placeHolder="즐기는 방법을 적어주세요!" autocomplete="off" required>
                                    </div>
                                    <button class="btn_submit2" type="submit" value="공유하기">share</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment-list">
                        <?php
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment LIMIT 10";
                            $result = $connect -> query($sql);

                            // echo "<pre>";
                            // var_dump(mysqli_fetch_array($result));
                            // echo "</pre>";

                            while( $info = mysqli_fetch_array($result) ){
                        ?>
                            <div>
                                <p><?=$info['youText']?></p>
                                <div class="icon">
                                    <img src="https://kdong1224.github.io/dothome21/class/img/img05.jpg" alt="프로필 사진">
                                    <span><?=$info['youName']?></span>
                                    <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                </div>
                            </div> 
                        <?php
                            };
                        ?>
                    
                    
                        <!-- <div>
                            <p>소주</p>
                            <div>
                                <img src="https://kdong1224.github.io/dothome21/class/img/img05.jpg" alt="프로필 사진">
                                <span>강동재</span>
                                <span>2021-09-16</span>
                            </div>
                        </div> -->
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