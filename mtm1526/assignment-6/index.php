<?php
	$planet = 'earth';
			
	if(isset($_GET['planet'])) {
		$planet = strtolower($_GET['planet']);
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Progressive Enhancement: Planets</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		<nav>
			<ul>
				<li id="earth"<?php if (($planet != 'mars') && ($planet != 'jupiter') && ($planet != 'venus')) {?> class = "current" <?php } ?>><a href="?planet=earth">Earth</a></li>
				<li id="mars"<?php if ($planet == 'mars') {?> class = "current" <?php } ?> ><a href="?planet=mars">Mars</a></li>
				<li id="jupiter"<?php if ($planet == 'jupiter') {?> class = "current" <?php } ?>><a href="?planet=jupiter">Jupiter</a></li>
				<li id="venus"<?php if ($planet == 'venus') {?> class = "current" <?php } ?>><a href="?planet=venus">Venus</a></li>
			</ul>
		</nav>
		
		<article id="fillme">
			<?php
				
				switch($planet){
					case 'mars':
						include 'includes/mars.php';
					break;
					case 'jupiter':
						include 'includes/jupiter.php';
					break;
					case 'venus':
						include 'includes/venus.php';
					break;
					
					default:
						include 'includes/earth.php';
					break;
					
				}
			?>
		</article>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/planet-tabs.js"></script>
	</body>
</html>
