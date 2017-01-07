<?php
// データベースに接続
$dsn = 'mysql:dbname=kyakuchuyaro;host=ja-cdbr-azure-east-a.cloudapp.net;charset=utf8';
$username = 'b53c33466811d4';
$password = '74c1d5e0';
$pdo = new PDO($dsn, $username, $password);

$sql = "SELECT * FROM shop WHERE ShopNumber = 0";
$stmt = $pdo->query($sql);
$shop = $stmt->fetch();
$shopname = $shop[ShopName];
$mailaddress = $shop[MailAddress];

// 名前などの変数を受け取り
$publisher = $_POST['publisher'];
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$number = $_POST['number'];

$body = "";
for ($i = 0; $i < count($isbn); $i++) {
$body .= "
【注文".($i+1)."】
出版社：$publisher[$i]
ISBN：$isbn[$i]
書名：$title[$i]
著者：$author[$i]
注文数：$number[$i]
";
}

// メール送信
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "kyakuchu.yaro@gmail.com";
$mail->Password = "KuroTaitsu";

$mail->CharSet = "UTF-8";
$mail->Encoding = "base64";

$mail->setFrom('order@kyakuchu-yaro.com', '客注野郎.com');
$mail->addAddress($mailaddress, 'O書店');

$mail->Subject = '【客注野郎.com】客注注文受付のお知らせ';
$mail->Body =
"$shopname 様

補充発注を受け付けました。
$body
配送には1週間程度を要します。遠隔地・離島の店舗様の場合には
2週間以上かかる場合もありますのでご了承ください。
配送と共に送り状を送付いたします。貴店舗様で照合の上、
お受け取りください。

------------------------------------------------
客注野郎.com
〒123-4567 神奈川県第三新東京市芦ノ湖の底あたり";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>客注野郎.com</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="main">
		<header>
			<h1>客注野郎.com</h1>
			<nav>
				<a href="index.html">TOP</a>
				<a href="hatchu.php">発注</a>
				<a href="">FAQ</a>
				<a href="">問い合わせ</a>
			</nav>
		</header>
		
		<div id="left">
			<h2>書籍登録</h2>
			<h3>書名から探す</h3>
			<input type="search" placeholder="フリーワード">
			
			<h3>出版社名から探す</h3>
			<nav>
				<ul>
					<li>ア行<ul>
						<li><a href="">秋田書店</a></li>
						<li><a href="">朝日新聞出版</a></li>
						<li><a href="">岩崎書店</a></li>
						<li><a href="">オークラ出版</a></li>
					</ul></li>
					
					<li>カ行<ul>
						<li><a href="">海王社</a></li>
						<li><a href="">くもん出版</a></li>
						<li><a href="">SBクリエイティブ</a></li>
						<li><a href="">芳文社</a></li>
						<li><a href="">小峰書店</a></li>
						<li><a href="">ゴルフダイジェスト社</a></li>
					</ul></li>
				
				
					<li>サ行<ul>
						<li><a href="">実業之日本社</a></li>
						<li><a href="">主婦の友社</a></li>
						<li><a href="">集英社</a></li>
						<li><a href="">小学館</a></li>
						<li><a href="">小学館集英社プロダクション</a></li>
						<li><a href="">小学館クリエイティブ</a></li>
						<li><a href="">少年画報社</a></li>
						<li><a href="">照林社</a></li>
						<li><a href="">スクウェア・エニックス</a></li>
					</ul></li>
					
					<li>タ行<ul>
						<li><a href="">童心社</a></li>
						<li><a href="">徳間書店</a></li>
						<li><a href="">トランスワールドジャパン</a></li>
					</ul></li>
					
					<li>ナ行<ul>
						<li><a href="">日本文芸社</a></li>
					</ul></li>
					
					<li>ハ行<ul>
						<li><a href="">童心社</a></li>
						<li><a href="">双葉社</a></li>
						<li><a href="">ぶんか社</a></li>
						<li><a href="">ポプラ社</a></li>
						<li><a href="">ほるぷ出版</a></li>
					</ul></li>
					
					<li>マ行<ul>
						<li><a href="">マガジンハウス</a></li>
						<li><a href="">マッグガーデン</a></li>
					</ul></li>
				</ul>
			</nav>
		</div>
		
		<div id="right">
			<p><a href="index.html">トップ</a> -&gt; <a href="hatchu.php">発注</a> -&gt; <a href="hojuhatchu_kanryo.php">注文完了</a></p>
			
			<h2>注文完了</h2>
			<p><?php
				if (!$mail->send()) {
					echo "メール送信に失敗: " . $mail->ErrorInfo;
				} else {
					echo "確認メールを送信しました。";
				}
			?></p>

			<h3>注文内容</h3>
			<table id="example">
				<?php
					for ($i = 0; $i < count($isbn); $i++) {
				?>
				<tr>
					<th><?php echo '注文'.($i+1) ?></th>
				</tr>
				<tr>
					<td>出版社</td>
					<td><?php echo $publisher[$i] ?></td>
				</tr>
				<tr>
					<td>ISBN</td>
					<td><?php echo $isbn[$i] ?></td>
				</tr>
				<tr>
					<td>書名</td>
					<td><?php echo $title[$i] ?></td>
				</tr>
				<tr>
					<td>著者</td>
					<td><?php echo $author[$i] ?></td>
				</tr>
				<tr>
					<td>ご注文数</td>
					<td><?php echo $number[$i] ?></td>
				</tr>
				<?php
					}
				?>
			</table>

			<h3>注意事項</h3>
			<p>配送には1週間程度を要します。遠隔地・離島の店舗様の場合には2週間以上かかる場合もありますのでご了承ください。</p>
			<p>配送と共に送り状を送付いたします。貴店舗様で照合の上、お受け取りください。</p>

			<h3>ログ</h3>
			<p><?php
				foreach ($mail as $name => $value) {
					echo "$name: $value<br>";
				}
			 ?></p>
		</div>
		
		<footer>
			<p>Created by B7班 (株)今北産業, 設定的には取引先</p>
		</footer>
	</div>
</body>
</html>