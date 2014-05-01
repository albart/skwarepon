<?php

    require_once("PHPMailer/class.phpmailer.php");

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "outbound.att.net";
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->Username   = "albart@sbcglobal.net";
    $mail->Password   = "rooster80";
    $mail->SetFrom("albart@sbcglobal.net");
    $mail->AddAddress("albart@sbcglobal.net");
    $mail->Body = ".1";
    if ($mail->Send() === false)
        die($mail->ErrorInfo . "\n");
?>
