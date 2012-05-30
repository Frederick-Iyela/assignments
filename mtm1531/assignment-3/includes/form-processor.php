<?php
	$errors = array();
	$message = 'This email is to confirm your registration. Congratulations!';
	$senderEmail = 'iyel0001@algonquinlive.com';
	
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	$preferredlang = filter_input(INPUT_POST, 'preferredlang', FILTER_SANITIZE_STRING);
	$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(empty($name)){
			$errors['name'] = true;
		}
		
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = true;
		}
		
		if(mb_strlen($username) < 5 || mb_strlen($username) > 25){
			$errors['username'] = true;
		}
		
		if(empty($password) || mb_strlen($password) < 5 || mb_strlen($password) > 16){
			$errors['password'] = true;
		}
		
		if($preferredlang != 'english' || $preferredlang != 'french' || $preferredlang != 'spanish'){
			$errors['preferredlang'] = true;
		}
		
		if(!isset($_POST['acceptterms'])){
			$errors['acceptterms'] = true;
		}
		
		// check further
		if(empty($errors)){
			$headers = 'From: ' . 'Frederick Iyela' . '<' . $senderEmail . '>';
			mail($email, 'Registration Confirmation', $message, $headers);
		}
	}
	
?>