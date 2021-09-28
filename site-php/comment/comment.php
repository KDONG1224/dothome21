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
                <!-- cardType01 -->
                <section class="cardType">
                    <div class="cardType01">
                        <h2>혼술족을 위한 제안</h2>
                        <p>분위기를 내고 싶은 당신, 혼술을 하는 당신, 맛있는 술을 마시고 싶은 당신, 여러분을 위해 제안합니다. 
                        열심히 준비하였습니다. 재밌게 봐주세요~</p>
                        <div class="card-wrap">
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card01.jpg" alt="칵테일(Cocltail) 이미지입니다." class="card-img">
                                    <strong class="card-title">칵테일(Cocktail)</strong>
                                    <span class="card-desc">술과 여러 종류의 음료, 첨가물 등을 섞어 만든 혼합주를 일컫는다.</span>
                                    <span class="card-keyword">
                                        <span>#칵테일</span>
                                        <span>#모히또</span>
                                        <span>#블루하와이</span>
                                        <span>#마가리타</span>
                                        <span>#바카디</span>
                                    </span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card02.jpg" alt="맥주(Beer) 이미지입니다." class="card-img">
                                    <strong class="card-title">맥주(Beer)</strong>
                                    <span class="card-desc">보리를 가공한 맥아를 발효한 술이다. 알콜은 맥주의 종류에 따라 다양한 도수를 가진다.</span>
                                    <span class="card-keyword">
                                        <span>#맥주</span>
                                        <span>#카스</span>
                                        <span>#테라</span>
                                        <span>#한맥</span>
                                        <span>#타이거</span>
                                        <span>#하이네켄</span>
                                        <span>#기네스</span>
                                    </span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#">
                                    <img src="../assets/img/card03.jpg" alt="보드카(Vodka) 이미지입니다." class="card-img">
                                    <strong class="card-title">보드카(Vodka)</strong>
                                    <span class="card-desc">동유럽 원산의 증류주이다. 러시아어로 물을 뜻하는 낱말 'вода 보다’에서 유래되었다.</span>
                                    <span class="card-keyword">
                                        <span>#앱솔루트</span>
                                        <span>#스미노프</span>
                                        <span>#레이카</span>
                                        <span>#벨루가</span>
                                        <span>#그레이구스</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- //cardType01 -->
            </article>
            <article class="flow-article">
                <h3 class="ir_so">레시피 알아보기</h3>
                <section id="comment" class="section-commnet">
                    <h4>맛 좋은 술 공유하기</h4>
                    <p>맛 좋은 술을 댓글로 공유해주세요!</p>
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
                                        <label for="youText" class="ir_so">맛 좋은 술</label>
                                        <input type="text" name="youText" id="youText" class="input_write2 w100" placeHolder="맛 좋은 술을 적어주세요!" autocomplete="off" required>
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
                                <div>
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