<?php
function($result)
{
	$subject = $_REQUEST['subject']; // Subject of your email
	// $to = 'sayali.kulkarni17@gmail.com';
	$to = $_REQUEST['sayali.kulkarni17@gmail.com'];  //Recipient's E-mail

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$message .= 'Name: ' . $_REQUEST['name'] . "<br>";
	$message .= $_REQUEST['message'];

	if (@mail($to, $subject, $message, $headers))
	{
		// Transfer the value 'sent' to ajax function for showing success message.
		$result='sent';
	}
	else
	{
		// Transfer the value 'failed' to ajax function for showing error message.
		$result='failed';
	}
}

?>