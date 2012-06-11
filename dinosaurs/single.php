<?php
	require_once 'includes/db.php';
	
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	
	// ->prepare() allows us to have variables in our SQL
	// We can create placeholders and later fill them with some content
	// By using prepare, we are protecting against SQL injection attacks
	$sql = $db->prepare('
		SELECT id, dino_name, loves_meat, in_jurassic_park
		FROM dinosaurs
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
		<title><?php echo $results['dino_name']; ?> &middot; Dinosaurs</title>
	</head>
	
	<body>
		<h1><?php echo $results['dino_name']; ?></h1>
		
		<dl>
			<dt>Loves meat</dt>
			<dd><?php echo $results['loves_meat']; ?></dd>
			<dt>In Jurassic Park</dt>
			<dd><?php echo $results['in_jurassic_park']; ?></dd>
		</dl>
		
		<a href="delete.php?id=<?php echo $id; ?>">Delete</a>
		<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
	</body>
</html>