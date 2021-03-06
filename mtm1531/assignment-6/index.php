<?php
	require_once 'includes/db.php';
	
	$sql = $db->query('
		SELECT id, movie_title, release_date, director
		FROM movies
		ORDER BY movie_title ASC
	');
	
	//var_dump($db->errorInfo());
	
	$results = $sql->fetchAll();
?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Extending Movie Browser</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		<a href="add.php">Add New Movie</a>
	
		<?php foreach($results as $film):  ?>
		<h2><a href="single.php?id=<?php echo $film['id']; ?>"><?php echo $film['movie_title']; ?></a></h2>
		<dl>
			<dt>Release Date</dt>
			<dd><?php echo $film['release_date']; ?></dd>
			
			<dt>Director</dt>
			<dd><?php echo $film['director']; ?></dd>
			
		</dl>
		<?php endforeach; ?>

	</body>
</html>