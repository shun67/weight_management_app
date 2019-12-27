<?php
$dsn = 'mysql:dbname=*********;host=localhost';
$user = '*********';
$password = '*********';
//データベースの作成（IF NOT EXISTS）
$sql = 'DROP DATABASE member';
  //name comment date pass
$stmt = $pdo->query($sql);
    ?>
