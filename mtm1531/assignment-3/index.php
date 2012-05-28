<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registration Form Validation</title>
	</head>
	
	<body>
		<form method="post" action="index.php">
			<div>
				<label for="name">Name: </label>
				<input type="text" id="name" name="name" required value="">
			</div>
			
			<div>
				<label for="email">Email: </label>
				<input type="email" id="email" name="email" required value="">
			</div>
			
			<div>
				<label for="username">Username: </label>
				<input type="text" id="username" name="username" required value="">
			</div>
			
			<div>
				<label for="password">Password: </label>
				<input type="password" id="password" name="password" required value="">
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
				<textarea id="notes" name="notes">
			</div>
			
			<div>
				<input type="checkbox" id="acceptterms" name="acceptterms" required value="1">
				<label for="acceptterms">Accept Terms</label>
			</div>
			
			<button type="submit">Send</button>
		</form>
	</body>
</html>