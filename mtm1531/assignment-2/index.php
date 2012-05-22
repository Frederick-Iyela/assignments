<?php
	$value1 = $_POST['number-1'];
	$value2 = $_POST['number-2'];

	function addTwo($a, $b){
		$value3 = ($a + $b) * 1.13;
		$total = number_format($value3, 2, '.', ', ');
		
		return($total);
	}
	
	function subtractTwo($a, $b){
		$value3 = ($a - $b) * 1.13;
		$total = number_format($value3, 2, '.', ', ');
		
		return($total);
	}
	
	function multiplyTwo($a, $b){
		$value3 = ($a * $b) * 1.13;
		$total = number_format($value3, 2, '.', ', ');
		
		return($total);
	}
	
	function divideTwo($a, $b){
		$value3 = ($a / $b) * 1.13;
		$total = number_format($value3, 2, '.', ', ');
		
		return($total);
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Money Calculator Form</title>
		<link href="css/general.css" rel="stylesheet">
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
		<?php else: ?>
			<?php
				switch($_POST['function']) {
					case '+':
					?>
						<p>$ <?php echo addTwo($value1, $value2);?>  (tax included)</p>
					<?php
					break;
					
					case '-':
					?>
						<p>$ <?php echo subtractTwo($value1, $value2);?>  (tax included)</p>
					<?php
					break;
					
					case '*':
					?>
						<p>$ <?php echo multiplyTwo($value1, $value2);?>  (tax included)</p>
						
					<?php
					break;
					
					case '/':
					?>
						<p>$ <?php echo divideTwo($value1, $value2);?>  (tax included)</p>
					<?php
					break;
					
				}
			?>	
			
		<?php endif; ?>
	</body>
</html>