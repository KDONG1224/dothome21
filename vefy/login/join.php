<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>회원가입</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/join.css">
</head>
<body>
    <div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="contents">
        <div class="container">
            <form name="join" action="joinSave.php" method="POST" onsubmit="joinCheck()">
                <fieldset>
                    <legend class="ir_so">회원가입</legend>
                    <div class="join_title">회원가입</div>
                    <div class="join_wrap">
                        <div class="join_left">
                            <div>
                                <label for="youID"></label>
                                <input type="text" name="youID" id="youID" class="vefy_input" placeholder="아이디" autocomplete="off" autofocus required></input>
                            </div>
                            <div>
                                <label for="youPass"></label>
                                <input type="password" name="youPass" id="youPass" class="vefy_input" maxlength="20" placeholder="비밀번호" autocomplete="off" required></input>
                            </div>
                            <div>
                                <label for="youPassC"></label>
                                <input type="password" name="youPassC" id="youPassC" class="vefy_input" maxlength="20" placeholder="비밀번호 확인" autocomplete="off" required></input>
                            </div>
                            <div>
                                <label for="youName"></label>
                                <input type="text" name="youName" id="youName" class="vefy_input" placeholder="이름" autocomplete="off" required></input>
                            </div>
                            <div>
                                <label for="youPhone"></label>
                                <input type="text" name="youPhone" id="youPhone" class="vefy_input" placeholder="휴대폰 번호" autocomplete="off" required></input>
                            </div>
                            <div>
                                <label for="youEmail"></label>
                                <input type="email" name="youEmail" id="youEmail" class="vefy_input" placeholder="이메일" autocomplete="off" required></input>
                            </div>
                            <div class="left_desc">* 비밀번호는 공백 없이 영문/숫자 포함 6 ~ 16자 내외로 입력해주시기 바랍니다.</div>
                        </div>
                        <div class="join_line"></div>
                        <div class="join_right">
                            <div class="right_title"><input type="checkbox" name="check" id="checkAll">모든 약관 동의</div>
                            <div class="agree_wrap">
                                <div class="right_agree">&lt;개인정보 수집 목적><br>
                                    가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션<br><br>

                                    &lt;수집하는 개인정보 목록><br>
                                    아이디(이메일주소), 비밀번호, 이름 보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)
                                    개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보수집을 동의함으로 간주합니다.<br><br>

                                    회원가입은 1인당 1개의 이메일 계정을이용할 수 있습니다.
                                    개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용됩니다.
                                </div>
                                <div class="agree_desc must"><input type="checkbox" name="check" id="check" class="must-check">[필수] 개인정보 수집 및 이용에 대한
                                    동의</div>
                                <div class="agree_desc2 choice"><input type="checkbox" name="check" id="check" class="choice-check">[선택] 마케팅 광고성 정보 수신에
                                    대한 동의</div>
                            </div>
                            <button type="submit" class="join_click">회원가입</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
    <!-- //contents -->
    
    <!-- //footer -->
    <footer id="footer">
        <?php
            include "../include/footer.php"
        ?>
    </footer>
    <!-- //footer -->

    <!-- script -->
    <script>
        const agreeChkAll = document.querySelector('#checkAll');
        const agreeChk = document.querySelectorAll('.check');
        const agreeMust = document.querySelector('.must');
        const agreeCho = document.querySelector('.choice');
        const join = document.querySelector('.join_click');

        agreeChkAll.addEventListener('change', (e) => {
            let agreeChk = document.querySelectorAll('#check');

            for (let i = 0; i < agreeChk.length; i++) {
                agreeChk[i].checked = e.target.checked;
            }
        });

        function result(e){
            e.preventDefault;

            const selectMust = `input name=check:checkde`;
            const selectResult = (selectMust || {}).value;
            if(selectResult == true){
                join.style.point-event = "visiable";
            } else {
                join.style.point-event = "none";
            }
        } 
    </script>
    <!-- //script -->
</body>
</html>