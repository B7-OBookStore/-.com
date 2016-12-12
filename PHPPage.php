<?php
$dsn = 'mysql:dbname=kyakuchuyaro;host=ja-cdbr-azure-east-a.cloudapp.net;charset=utf8';
$username = 'b53c33466811d4';
$password = '74c1d5e0';
$pdo = new PDO($dsn, $username, $password);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        にゃーん<br>
        <?php
            $sql = "SELECT * FROM book";
 
            // SQLステートメントを実行し、結果を変数に格納
            $stmt = $pdo->query($sql);
 
            // foreach文で配列の中身を一行ずつ出力
            foreach ($stmt as $row) {
 
            // データベースのフィールド名で出力
                echo $row['Title'].'：'.$row['Publisher'].'人';
 
                // 改行を入れる
                echo '<br>';
            }
        ?>
    </body>
</html>
