<?php
 
function db_connect(){
	$dsn = 'mysql:dbname=tb210005db;host=localhost';
	$user = 'tb-210005';
	$password = 'uKdsWMXhMN';
	
	try{
		$dbh = new PDO($dsn, $user, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
 
?>