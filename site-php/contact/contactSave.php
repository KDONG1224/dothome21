<?php
    include "PHPMailer.php"; 
    include "SMTP.php";
    $contactFrom = $_POST['contactFrom'];
    $contactTo = $_POST['contactTo'];
    $contactSubject = $_POST['contactSubject'];
    $contactContent = $_POST['contactContent'];
    $mail = new PHPMailer();
    $mail->isSMTP();
    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.naver.com';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8'; 
    $mail->Username = 'gkfl8809';
    $mail->Password = 'dlgidfla2798369'; //2차인증하면 2차인증 비번입력
    $mail->setFrom('gkfl8809@naver.com', 'PHP Class'); //중계
    $mail->addReplyTo($contactFrom, '안녕하세요!');  //보내는
    $mail->addAddress('gkfl8807@gmail.com', 'John Doe'); //받는
    $mail->Subject = $contactSubject;
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    $mail->msgHTML($contactContent);
    $mail->AltBody = $contactContent;
    //$mail->addAttachment('../assets/img/post01.jpg');
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
?>
<script>
    location.href = "contactResult.php";
</script>