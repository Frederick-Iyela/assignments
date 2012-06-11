<?php
	require_once 'includes/db.php';
	
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	
	// ->prepare() allows us to have variables in our SQL
	// We can create placeholders and later fill them with some content
	// By using prepare, we are protecting against SQL injection attacks
	$sql = $db->prepare('
		SELECT id, movie_title, release_date, director
		FROM movies
		WHERE id = :id
	');
	
	// bindValue(placeholder, variable, datatype)
	$sql->bindValue(':id', $id, PDO::PARAM_INT);
	$sql->execute();
	$results = $sql->fetch(); // used to get one item from DB. 'fetchAll()' used for multiple.
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $results['movie_title']; ?> &middot; Movie Browser</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		<h1><?php echo $results['movie_title']; ?></h1>
		
		<dl>
			<dt>Release Date</dt>
			<dd><?php echo $results['release_date']; ?></dd>
			
			<dt>Director</dt>
			<dd><?php echo $results['director']; ?></dd>
		</dl>
		
		<a href="delete.php?id=<?php echo $id; ?>">Delete</a>
	</body>
</html>