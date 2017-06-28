<?php

require './vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = '';

$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('from_email_address@domain.com', 'From Name');
$mail->addAddress('to_email_address@domain.com', 'To Name');

$mail->isHTML(true);
$mail->Subject = 'Amazon SES test (SMTP interface accessed using PHP)';
$mail->Body    = '<h1>Email Test</h1>
							    <p>This email was sent through the 
							    <a href="http://aws.amazon.com/ses/">Amazon SES</a> SMTP
							    interface using the <a href="https://github.com/PHPMailer/PHPMailer">
							    PHPMailer</a> class.</p>';

$mail->AltBody = "Email Test\r\nThis email was sent through the 
Amazon SES SMTP interface using the PHPMailer class.";

if(!$mail->send()) {
    echo 'Email not sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Email sent!';
}