<?php
    header('Content-type: application/json');

	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contacting us. We will contact you as quickly as we can.'
	);

    $name = @trim(stripslashes($_POST["name"])); 
    $email = @trim(stripslashes($_POST["email"])); 
    $subject = @trim(stripslashes($_POST["subject"])); 
    $message = @trim(stripslashes($_POST["message"])); 
    $phone = @trim(stripslashes($_POST["phone"])); 
    $company = @trim(stripslashes($_POST["company"])); 

    $email_from = $email;
    $email_to = 'surooon@gmail.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Company: ' . $company . "\n\n" .'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;