<?php

require_once '../vendor/PHPMailerAutoload.php';
define('SERVICE_EMAIL', 'koravanjiaparanji@gmail.com');
define('SERVICE_EMAIL_PASSWORD', '1234dcba');
define('SERVICE_NAME', 'Team Aparanji, Bengaluru');

$mail = new PHPMailer();
$data = $_POST;

var_dump($data);

if(!$data['g-recaptcha-response']){
	
	@header('Location: mailError.php');
}
else{

	$secretKey = "6Lf6QTYUAAAAADafF2ZjPvyG4k-IzZe7Voj4I-W3";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=". $data['g-recaptcha-response'] . "&remoteip=".$ip);
    $responseKeys = json_decode($response,true);

    if(intval($responseKeys["success"])){

    	date_default_timezone_set('Etc/UTC');

    	//Tell PHPMailer to use SMTP
    	$mail->isSMTP();
    	$mail->Host = 'smtp.gmail.com';
    	$mail->Port = 587;
    	$mail->SMTPSecure = 'tls';
    	$mail->SMTPAuth = true;
    	$mail->Username = SERVICE_EMAIL;
    	$mail->Password = SERVICE_EMAIL_PASSWORD;
    	$mail->setFrom($data['email'], $data['name']);
    	$mail->addReplyTo($data['email'], $data['name']);
    	$mail->addAddress(SERVICE_EMAIL, SERVICE_NAME);
    	$mail->Subject = '[aparanjimag.in] Feedback';
    	$mail->msgHTML($data['message']);
    	$mail->AltBody = $data['message'];
    	
		if($mail->send()) {

			@header('Location: mailSuccess.php');
		}
		else {

			@header('Location: mailError.php');
		}
	}
	else{
		
		@header('Location: mailError.php');
	}
}
?>