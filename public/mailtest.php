<?php

    require_once("PHPMailer/class.phpmailer.php");

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.fas.harvard.edu";
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->Username   = "jharvard";
    $mail->Password   = "crimson";
    $mail->SetFrom("jharvard@harvard.edu");
    $mail->AddAddress("albart@sbcglobal.net");
    $mail->Body = ".1";
    if ($mail->Send() === false)
        die($mail->ErrorInfo . "\n");
?>
