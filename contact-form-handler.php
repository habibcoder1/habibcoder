<?php 

	$name = $_POST["name"];
	$visitor_email = $_POST["email"];
	$subject = $_POST["sub"];
	$message = $_POST["message"];

	$email_from = "hrhabib076@gmail.com";
	$email_subject = "Mail From Website";
	$email_body = "User Name: $name.\n".
					"User Email: $email.\n".
					"User Subject: $subject.\n".
					"User Message: $message.\n";


	$to = "contactme.hrhabib@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .="Reply To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header('Location: index.html');


?>