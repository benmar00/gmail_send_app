<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Changed from 'smtp-gmail.com' to 'smtp.gmail.com'
        $mail->SMTPAuth = true;
        $mail->Username = 'awesomebenny04@gmail.com';
        $mail->Password = 'haiqfmeoeodiplgs';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('awesomebenny04@gmail.com');
        $mail->addAddress($_POST['email']);
        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];

        if ($mail->send()) {
            echo '<script>
                    alert("Message has been sent");
                    document.location.href = "index.php";
                  </script>';
        } else {
            echo 'Message could not be sent';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo 'Message could not be sent';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

?>