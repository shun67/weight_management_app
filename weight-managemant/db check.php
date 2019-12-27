<?php
	$dsn = 'mysql:dbname=*********;host=localhost';
	$user = '*********';
	$password = '*********';
	$pdo = new PDO($dsn, $user, $password);

$sql ='SHOW CREATE TABLE member_1';
	$result = $pdo -> query($sql);
	foreach ($result as $row){
		echo $row[1];
	}
	echo "<hr>";
	?>
