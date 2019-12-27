<?php
session_start();

header("Content-type: text/html; charset=utf-8");

// ログイン状態のチェック
if (!isset($_SESSION["account"])) {
	header("Location: login_form.php");
	exit();
}

$account = $_SESSION['account'];
$id=$_SESSION['id'];
require_once("db.php");
$pdo = db_connect();
$sql = 'SELECT * FROM member_1';
$stmt = $pdo->query($sql);
$results = $stmt->fetchALL();
foreach ($results as $key=> $row){
if($row['id']==$id){
$my_weight= isset($_POST['weight']) ? $_POST['weight'] : $row['weight'];
$my_hight=isset($_POST['hight']) ? $_POST['hight'] : $row['tall'];
}
}
#編集##
$stmt = $pdo->query($sql);
$results = $stmt->fetchAll();
$sql = 'update member_1 set weight=:my_weight,tall=:my_hight where id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':my_weight', $my_weight);
$stmt->bindParam(':my_hight', $my_hight);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
#####
if($my_weight=="NULL" || $my_weight==0){
    $my_weight="〇〇";
}
if($my_hight=="NULL"||$my_hight==0){
    $my_hight="〇〇";
}
if(($my_weight=="NULL" || $my_weight==0)&&($my_hight=="NULL"||$my_hight==0)){
    $BMI="〇〇";
    $ave_weight="〇〇";
}
else{
    $BMI=$my_weight/($my_hight*$my_hight);
    $ave_weight=($my_hight*$my_hight)*22;
}

echo "<p>".htmlspecialchars($account,ENT_QUOTES)."さん、こんにちは！</p>";
echo "<p>";
echo "<p>";
?>
  <!DOCTYPE html>

<head>
    <meta charset="UTF-8">
</head>
<p>現在の体重は<?php echo $my_weight;?>Kg</p>
<p>身長は<?php echo $my_hight;?>m</p>
<p>BMIは<?php echo $BMI;?></p>
<p>同じ身長の人の平均体重は<?php echo $ave_weight;?>kgです</p>
<body>
    <form method="post" action="main.php">
        <p>身長を登録or更新できます</p>
        <input type="number" step="0.01" value="" name="hight" placeholder="身長" required /><br />
        <input type="submit" value="登録">
     </form>

    <form method="post" action="main.php">
        <p>本日の体重を登録してください</p>
        <input type="number" step="0.1"　 name="weight" value="" placeholder="体重" required><br />
        <input type="submit" value="登録">
    </form>

    <li><a href='logout.php'>ログアウトする</a></li>