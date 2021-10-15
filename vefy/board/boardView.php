<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="베피">
    <meta name="description" content="채식을 위한 정보 공유 사이트입니다.">
    <meta name="keywords" content="베피, 채식, 그릭요거트, 글루텐, 글루텐프리">
    <title>게시판</title>
    
    <!-- style -->
    <link rel="stylesheet" href="../assets/css/normal/reset.css">
    <link rel="stylesheet" href="../assets/css/normal/fonts.css">
    <link rel="stylesheet" href="../assets/css/normal/common.css">
    <link rel="stylesheet" href="../assets/css/board.css">
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
                <div class="boardType">
                    <h3>자유게시판</h3>
                    <p></p>
                    <div class="board">
                        <div class="board-table mt30">
                            <table>
                                <colgroup>
                                    <col style="width: 15%" />
                                    <col style="width: 85%" />
                                </colgroup>
                                <tbody>
                                    <?php
                                        $boardID = $_GET['boardID'];
  
                                        $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) WHERE b.myBoardID = {$boardID}";
                                        $result = $connect -> query($sql);

                                        $view = "UPDATE myBoard SET boardView = boardView+1 WHERE myBoardID = {$boardID}";
                                        $connect -> query($view);

                                        if($result){
                                            $info = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<tr><th>제목</th><td class='left'>".$info['boardTitle']."</td></tr>";
                                            echo "<tr><th>글쓴이</th><td class='left'>".$info['youName']."</td></tr>";
                                            echo "<tr><th>작성일</th><td class='left'>".date('Y-m-d', $info['regTime'])."</td></tr>";
                                            echo "<tr><th>조회수</th><td class='left'>".$info['boardView']."</td></tr>";
                                            echo "<tr><th class='height'>내용</th><td class='height left'>".$info['boardContent']."</td></tr>";
                                        }
                                    ?>
                                    <!-- <tr>
                                        <th>제목</th>
                                        <td class="left">안녕</td>
                                    </tr>
                                    <tr>
                                        <th>글쓴이</th>
                                        <td class="left">해피</td>
                                    </tr>
                                    <tr>
                                        <th>작성일</th>
                                        <td class="left">21.09.27</td>
                                    </tr>
                                    <tr>
                                        <th>조회수</th>
                                        <td class="left">2</td>
                                    </tr>
                                    <tr>
                                        <th class="height">내용</th>
                                        <td class="height left">해피해피해피해피</td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <div class="btn">
                                <?php
                                    $boardID = $_GET['boardID'];

                                    $sql = "SELECT myMemberID FROM myBoard WHERE myBoardID = {$boardID};";
                                    $result = $connect -> query($sql);

                                    $info = $result -> fetch_array(MYSQLI_ASSOC);

                                    if($info['myMemberID'] == $_SESSION['myMemberID']){
                                ?>
                                <a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" onclick="if(!confirm('정말 삭제하시겠습니까?')){return false;}">삭제하기</a>
                                <a href="boardModify.php?boardID=<?=$_GET['boardID']?>">수정하기</a>
                                <?php
                                    } else {
                                    }
                                ?>
                                <a href="board.php">목록보기</a>
                            </div>
                        </div>
                    </div>
                    <div class="reply_view">
                    <h3>댓글목록</h3>
                        <?php

                            $youID = $_GET['youID'];                

                            $sql = mq("SELECT * FROM ".$youID."_reply WHERE con_num='".$youID."' order by youID desc");
                            while($reply = $sql->fetch_array()){
                        ?>
                        <div class="dap_lo">
                            <div><b><?php echo $reply['name'];?></b></div>
                            <div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
                            <div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
                
                        </div>
                    <?php } ?>
                
                    <!--- 댓글 입력 폼 -->
                    <div class="dap_ins">
                        <form action="reply_ok.php?board_id=<?echo $board_id;?>&idx=<?php echo $bno; ?>" method="post">
                            <input type="hidden" name="dat_user" id="dat_user" class="dat_user" size="15" placeholder="아이디" value=<?$_SESSION['userid']?>>
                            <div style="margin-top:10px; ">
                                <textarea name="content" class="reply_content" id="re_content" ></textarea>
                                <button id="rep_bt" class="re_bt">댓글</button>
                            </div>
                        </form>
                    </div>
                </div><!--- 댓글 불러오기 끝 -->
                <div id="foot_box"></div>
                </div>
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