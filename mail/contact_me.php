<?php
ini_set('SMTP', "smtp.vianet.com.np");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "kayhantaro@gmail.com");


if(empty($_POST['cv'])||empty($_POST['message']))
{
	echo "No arguments Provided!";
	return false;
}
$cv = $_POST['cv'];
$message = $_POST['message'];

// use wordwrap() if lines are longer than 70 characters
$message = wordwrap($message,70);

// send email
if(mail("saginbajracharya09@gmail.com","Application",$message,$cv)){
	echo "sent";
} 
else{
	echo "not sent";
}
?>