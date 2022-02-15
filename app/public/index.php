<?php
	
	$pdo = new PDO('mysql:dbname=test;host=mysql', 'test', 'test', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); 
	try {
	$result = $pdo->query('SELECT username FROM users LIMIT 1');
	$rows = $result->fetch();

	} catch(PDOException $e) {
		echo $e->getMessage(); //Remove or change message in production code
	}

	echo $rows['username'];
	exit();
	session_start();

	if(false){ # logged-in???
		header("Location: login.php");
		exit();
	}

	header("Cache-Control: no-cache");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Files</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="static/style.css">
</head>
<body>
	<div class="center-screen">
	Upload file goes here!!
	</div>
</body>
</html>