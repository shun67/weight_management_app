<?php
 

$dsn = 'mysql:dbname=tb210005db;host=localhost';
$user = 'tb-210005';
$password = 'uKdsWMXhMN';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
$sql="CREATE TABLE IF NOT EXISTS pre_member"
    ."("
    ."id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,"
    ."urltoken VARCHAR(128) NOT NULL,"
    ."mail VARCHAR(50) NOT NULL,"
    ."date DATETIME NOT NULL,"
    ."flag TINYINT(1) NOT NULL DEFAULT 0"
    .");";
    $stmt = $pdo->query($sql);

$sql="CREATE TABLE IF NOT EXISTS member_1"
    ." ("
    ."id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,"
    ."account VARCHAR(50) NOT NULL,"
    ."mail VARCHAR(50) NOT NULL,"
    ."password VARCHAR(128) NOT NULL,"
    ."flag TINYINT(1) NOT NULL DEFAULT 1,"
    ."weight DOUBLE,"
    ."tall DOUBLE"
    .");";
    $stmt = $pdo->query($sql);
?>