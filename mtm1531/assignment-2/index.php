<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Money Calculator Form</title>
	</head>
	
	<body>
		<?php if($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
			<form method="post" action="index.php">
			
				<label for="number-1">Number 1</label>
				<input id="number-1" name="number-1">
				
				<label for="number-2">Number 2</label>
				<input id="number-2" name="number-2">
				
				<label for="function">Function</label>
				<select if="function" name="function">
					<option>+</option>
					<option>-</option>
					<option>*</option>
					<option>/</option>
				</select>
				
				<button type="submit">Calculate</button>
			</form>
		
			
		<?php endif; ?>
	</body>
</html>