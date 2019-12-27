<?php
session_start();
 
header("Content-type: text/html; charset=utf-8");
 
//クロスサイトリクエストフォージェリ（CSRF）対策
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$token = $_SESSION['token'];
 
//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');
 
?>
    <!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <form method="post" action="login_check.php">
            <p>登録したメールアドレスを入力してください</p>
            <input type="text" value="" name="account" placeholder="アカウント名" required /><br />
            <p>パスワードを入力してください</p>
            <input type="password" 　 name="password" value="" placeholder="パスワード" required><br />
            <input type="submit" value="送信">
        </form>

        <li><a href="registration_mail_form.php">新規登録はこちら</a></li>