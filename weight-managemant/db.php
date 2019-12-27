<?php
 
function db_connect(){
	$dsn = 'mysql:dbname=*********;host=*********';
	$user = '*********';
	$password = '*********';
	
	try{
		$dbh = new PDO($dsn, $user, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
 
?>
