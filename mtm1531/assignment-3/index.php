<?php
	require_once 'includes/form-processor.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registration Form Validation</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		<form method="post" action="index.php">
			<div>
				<label for="name">Name: </label>
				<input type="text" id="name" name="name" required value="<?php echo $name; ?>">
				<?php if (isset($errors['name'])): ?><strong class="error"> * required</strong><?php endif; ?>
			</div>
			
			<div>
				<label for="email">Email: </label>
				<input type="email" id="email" name="email" required value="<?php echo $email; ?>">
				<?php if (isset($errors['email'])): ?><strong class="error"> * required</strong><?php endif; ?>
			</div>
			
			<div>
				<label for="username">Username: </label>
				<input type="text" id="username" name="username" required value="<?php echo $username; ?>">
				<?php if (isset($errors['username'])): ?><strong class="error"> * required, and must be 5 to 25 characters long</strong><?php endif; ?>
			</div>
			
			<div>
				<label for="password">Password: </label>
				<input type="password" id="password" name="password" required value="<?php echo $password; ?>">
				<?php if (isset($errors['password'])): ?><strong class="error"> * required, and must be 5 to 16 characters long</strong><?php endif; ?>
			</div>
			
			<fieldset>
				<legend>Preferred Language</legend>
				
				<input type="radio" id="english" name="preferredlang" value="english">
				<label for="english">English</label>
				
				<input type="radio" id="french" name="preferredlang" value="french">
				<label for="french">French</label>
				
				<input type="radio" id="spanish" name="preferredlang" value="spanish">
				<label for="spanish">Spanish</label>
			</fieldset>
			
			<div>
				<label for="notes">Notes</label>
				<textarea id="notes" name="notes"><?php echo $notes; ?></textarea>
			</div>
			
			<div>
				<input type="checkbox" id="acceptterms" name="acceptterms" required value="1">
				<label for="acceptterms">Accept Terms</label>
				<?php if (isset($errors['acceptterms'])): ?><strong class="error"> *Terms must be accepted!</strong><?php endif; ?>
			</div>
			
			<button type="submit">Send</button>
		</form>
	</body>
</html>