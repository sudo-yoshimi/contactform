<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into contactform(name, mail, age, comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>お問合わせフォーム</h1>
    
    <div class="confirm">
        <p>お問合わせありがとうございます。<br>営業日3日以内にお返事させて頂きます。</p>
    </div>
    <br>
</body>
</html>