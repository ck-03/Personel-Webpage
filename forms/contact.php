<?php


//varible setting
 $name= $_REQUEST['name'];
 $email = $_REQUEST['Email'];
 $message = $_REQUEST['Message'];
 $subject = "Message from Contact form !";

 $to ="chandrakiran0318@gmail.com";  // change receiving email id 
 
 $content = "Name : ". $name. "\r\nContact email : ". $email. "\r\n \r\nMessage : \r\n \r\n".$message ; // name [break] email [break] message
 


// check input fields
if ( empty($name)|| empty($email)|| empty($message))
{
echo"<script type='text/javascript'>alert('Please fill all correct');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
}


?>
/*
$receiving_email_address = 'chandrakiran03@hotmail.com';

if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  include( $php_email_form );
} else {
  die( 'Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

$contact->smtp = array(
  'host' => 'smtp.gmail.com',
  'username' => 'chandrakiran0318@gmail.com',
  'password' => 'chandrakiran0318.#',
  'port' => '587'
);


$contact->add_message( $_POST['name'], 'From');
$contact->add_message( $_POST['email'], 'Email');
$contact->add_message( $_POST['message'], 'Message', 10);

echo $contact->send();


$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "chandrakiran0318@gmail.com";
$mail->Password = "chandrakiran0318.#";

$mail->setFrom($email, $name);
$mail->addAddress("Chandrakiran03@hotmail.com", "kiran");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();
-/
*/