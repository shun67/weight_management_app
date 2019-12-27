<?php
$dsn = 'mysql:dbname=tb210005db;host=localhost';
$user = 'tb-210005';
$password = 'uKdsWMXhMN';
//データベースの作成（IF NOT EXISTS）
$sql = 'DROP DATABASE member';
  //name comment date pass
$stmt = $pdo->query($sql);
    ?>