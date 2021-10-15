<!-- jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<h1><a href="../pages/main.php"><img src="../assets/img/logo_header.svg" alt="헤더로고입니다."></a></h1>
<h2 class="ir_so">메인 메뉴</h2>
<nav class="cl-effect-5" id="cl-effect-5">
    <a href="../store/store.php"><span data-hover="스토어">스토어</span></a>
    <a href="../board/board.php"><span data-hover="커뮤니티">커뮤니티</span></a>
    <a href="../map/map.php"><span data-hover="지도">지도</span></a>
    <a href="../QNA/qna.php"><span data-hover="고객센터">고객센터</span></a>
</nav>
<div class="member">
    <strong class="ir_so">회원 정보 영역</strong>
    <?php
        if(isset($_SESSION['myMemberID'])){ ?>
            <a href="#"><?=$_SESSION['youName']?>님 환영합니다.</a>
            <a href="../login/logout.php">로그아웃</a>      
    <?php } else { ?>
            <a href="../login/login.php">로그인</a>
            <a href="../login/join.php">회원가입</a>
    <?php }; ?>
</div>