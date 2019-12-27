<?php
	$dsn = 'mysql:dbname=tb210005db;host=localhost';
	$user = 'tb-210005';
	$password = 'uKdsWMXhMN';
	$pdo = new PDO($dsn, $user, $password);

$sql ='SHOW CREATE TABLE member_1';
	$result = $pdo -> query($sql);
	foreach ($result as $row){
		echo $row[1];
	}
	echo "<hr>";
	?>