<?php
	$error = array();
	
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	
	$preferredlang = filter_input(INPUT_POST, 'preferredlang', FILTER_SANITIZE_STRING);
	$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(empty($name)){
			$error['name'] = true;
		}
		
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error['email'] = true;
		}
		
		if(mb_strlen($username) < 5 || mb_strlen($username) > 25){
			$errors['username'] = true;
		}
		
		if($preferredlang != 'english' || $preferredlang != 'french' || $preferredlang != 'spanish'){
			$errors['preferredlang'] = true;
		}
		
		if(!isset($_POST['acceptterms'])){
			$errors['acceptterms'] = true;
		}
		
		// check further
		if(empty($errors)){
			$headers = 'From: ' . $name . '<' . $email . '>';
			mail('iyel0001@algonquinlive.com', $possible_subjects[$subject], $message, $headers);
		}
	}
	
?>