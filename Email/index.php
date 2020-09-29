<?php 

require_once("vendor/phpmailer/phpmailer/class.phpmailer.php");
require_once("vendor/phpmailer/phpmailer/class.smtp.php");

/*use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ SMTP ;
*/
//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->Charset = 'UTF-8';

//Tell PHPMailer to use SMTP
$mail->isSMTP();

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
 );


//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
 //SMTP::DEBUG_CLIENT = client messages;
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->Debugoutout = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
//$mail->Host = 'smtp.gmail.com';
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'gpassosdelima@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 'doidolima334';

//Set who the message is to be sent from
$mail->setFrom('gpassosdelima@gmail.com', 'Gustavo');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('gugupassos1@hotmail.com', 'Gustavo');

//Set the subject line
$mail->Subject = 'Testando a classe PHPMailer com GMail';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('images/download.jpg');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    
}



 ?>