<?php 
  include "../connect/connect.php";
  include "../connect/session.php";

  if(isset($_SESSION['youID'])){
    echo "<script>alert('로그아웃을 하고 다시 접속해주세요.'); history.back();</script>";
  } else { ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 찾기</title>
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/login_id.css">
</head>

<body>
     <!-- //header -->
     <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <div class="container">
        <form name="login" action="loginFindID.php" method="POST">
            <fieldset>
                <legend class="ir_so">아이디 찾기</legend>
                <div class="loginTitle">아이디 / 비밀번호 찾기</div>
                <div class="login_find">
                    <div class="id_find">아이디 찾기</div>
                    <div class="pass_find"><a href="login_pass.php">비밀번호 찾기</a></div>
                </div>
                <div>
                    <label for="youName" class="ir_so">이름 / 닉네임</label>
                    <input type="text" name="youName" id="youName" class="input_write" placeholder="이름을 입력해 주세요." autocmplete="off" autofocus required>
                </div>
                <div>
                    <label for="youPhone" class="ir_so">휴대폰 번호</label>
                    <input type="text" name="youPhone" id="youPhone" class="input_write" maxlength="20" placeholder="휴대폰 번호를 입력해 주세요." autocmplete="off" required>
                </div>
                <button id="loginBtn" type="submit" class="btn_submit" onclick="findID(1)">확인</button>

            </fieldset>
        </form>
        <div class="find_desc">위 방법으로 아이디 / 비밀번호를 찾을 수 없을 경우<br>고객센터 게시판으로 문의 주시기 바랍니다.</div>
    </div>
    <!-- //footer -->
    <footer id="footer">
        <?php
            include "../include/footer.php"
        ?>
    </footer>
    <!-- //footer -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        function findID(index){
            
            // 아이디 찾기
            if(index == 1){
 
                // 이름을 입력하지 않았다면
                if($('#youName').val()==""){
 
                    alert("이름을 입력 해주세요.");
 
                // 전화번호를 입력하지 않았다면
                }else if($('#youPhone').val()==""){
 
                    alert("휴대폰 번호를 입력 해주세요.");
                }
 
                $('#loginBtn').submit();

            }else{
            }
        }
    </script>
</body>

</html>
<?php } ?>