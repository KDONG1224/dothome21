<?php
    include "../connect/connect.php";

    $youName = $_POST['youName'];
    $youText = $_POST['youText'];
    $regTime = time();

    $sql = "INSERT INTO myComment(youName, youText, regTime) VALUES ('$youName', '$youText', '$regTime')";

    $result = $connect -> query($sql);

    // if($result){
    //     echo "INSERY INTO true";
    // } else {
    //     echo "INSERY INTO false";
    // };
?>

<script>
    location.href = "../comment/comment.php#comment";
</script>