<?php
// Rashid Start

// wovgxhkwmzjrycwi




require 'phpmailer/class.phpmailer.php';
require 'phpmailer/PHPMailerAutoload.php';

define ('GUSER','ARTOSTUDY@yandex.com');
define ('GPWD','wovgxhkwmzjrycwi');


// make a separate file and include this file in that. call this function in that file.

function smtpmailer($to, $from, $from_name, $subject, $body) { 

   
  
    global $error;
    $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
   //  $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only

    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );



    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.yandex.com';
    $mail->Port = 465;

    $mail->Username = GUSER;  
    $mail->Password = GPWD;           
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
    } else {
        $error = 'Message sent!';
        return true;
    }
}

// $to, $from, $from_name, $subject, $body
	







// Rashid End

$name = trim($_POST['contact-full-name']);
$email = trim($_POST['contact-email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['contact-message']);


smtpmailer('ARTOSTUDY@yandex.com','ARTOSTUDY@yandex.com',$name,$subject,$message.'

Müraciət edən şəxsin email ünvanı: '.$email);





//     $to = 'example@gmail.com';
//     $subject = 'Doob Contact Query';
//     $_message = '<html><head></head><body>';
//     $_message .= '<p>Soyad və Ad: ' . $name . '</p>';
//     $_message .= '<p>Email: ' . $email . '</p>';
//     $_message .= '<p>Məzmun Başlığı: ' . $subject . '</p>';
//     $_message .= '<p>Məzmun: ' . $message . '</p>';
//     $_message .= '</body></html>';

//     $headers = 'MIME-Version: 1.0' . "\r\n";
//     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//     $headers .= 'From:  Doob <example@gmail.com>' . "\r\n";
//     $headers .= 'cc: example@gmail.com' . "\r\n";
//     $headers .= 'bcc: example@gmail.com' . "\r\n";
//     mail($to, $subject, $_message, $headers, '-f example@gmail.com');

//     $msg['success'] = "\n Email has been sent successfully.";
//     $msg['code'] = TRUE;

// echo json_encode($msg);