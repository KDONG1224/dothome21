<!-- jquery-->
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/loginModal.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">

<h2 class="ir_so">메인 메뉴</h2>
<nav class="cl-effect-5">
    <a href="../store/store2.php"><span data-hover="Store">Store</span></a>
    <a href="../board/board.php"><span data-hover="Community">Community</span></a>
    <a href="../board/boardRecipe.php"><span data-hover="Recipe">Recipe</span></a>
    <a href="../map/map.php"><span data-hover="Map">Map</span></a>
    <a href="../QNA/notice.php"><span data-hover="Service">Service</span></a>
</nav>
<h1><a href="../pages/main.php"><img src="../assets/img/logo_header.svg" alt="헤더로고입니다."></a></h1>
<div class="member">
    <strong class="ir_so">회원 정보 영역</strong>
    <?php
        if(isset($_SESSION['myMemberID'])){ ?>
            <a href="#"><?=$_SESSION['youName']?>  Welcome</a>
            <a href="../login/logout.php">Sign out</a>      
    <?php } else { ?>
            <a href="#" class="signIn">Sign in</a>
            <a href="../login/join.php">Sign up</a>
    <?php }; ?>
</div>

<!-- 모달 -->
<div class="modalOverlay">
        <div class="modalWrap">
            <div class="modalTop">
                <h1 class="modalTitle">VEFY</h1>
                <div class="modalDesc">Let's be friends</div>
                <p>Join our mailing list, get free shipping<br> on your first order</p>
            </div>
            <form name="login" action="loginFindID.php" method="POST">
                <fieldset>
                    <div class="modalInput">
                        <legend class="ir_so">로그인 입력</legend>
                        <div>
                            <label for="youID"></label>
                            <input type="text" name="youID" id="youID" class="input_write2" placeholder="아이디"
                                autocomplete="off" autofocus required></input>
                        </div>
                        <div>
                            <label for="youPass"></label>
                            <input type="password" name="youPass" id="youPass" class="input_write2" maxlength="20"
                                placeholder="비밀번호" autocomplete="off" required></input>
                        </div>
                        <input type="checkbox" name="check" value="check" class="check__box"></input>
                        <span class="SignUp">*Sign me up for emails from VEFY.<a href="join.php"><u>Privacy
                                    Policy</u></a></span>
                        <button type="submit" class="loginSuccess">Have fun with Vefy(login)</button>
                        <div class="loginClose"><u>No Thanks, Continue to website.</u></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <!-- 모달 -->

<script>
            let signIn = document.querySelector(".signIn");
            let overlay = document.querySelector(".modalOverlay");
            let modalClose = document.querySelector(".loginClose");

            function modalOn(){
                modal.classList.add("active")
            }
            function modalOff(){
                modal.classList.remove("active")
            }
            signIn.addEventListener("click", modalOn);
            overlay.addEventListener("click", modalOff);
            modalClose.addEventListener("click", modalOff);
</script>