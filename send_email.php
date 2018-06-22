<?php

	$admin_email = 'spikirard@gmail.com';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['message'];
	
	mail($admin_email, 'Contact', $comment, 'From: ' .$email);
	
	Header('Location: index.html');

?>