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
$name = $_POST['name'];
$kana = $_POST['kana'];
$memo = $_POST['memo'];
$publisher = $_POST['publisher'];
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$number = $_POST['number'];

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

$name($kana)様の客注を受け付けました。

メモ・客注番号：$memo

出版社：$publisher
ISBN：$isbn
書名：$title
著者：$author
注文数：$number

配送には1週間程度を要します。遠隔地・離島の店舗様の場合には
2週間以上かかる場合もありますのでご了承ください。
配送と共に送り状を送付いたします。貴店舗様で照合の上、
お受け取りください。

------------------------------------------------
客注野郎.com
〒123-4567 神奈川県第三新東京市芦ノ湖の底あたり"
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
			<p><a href="index.html">トップ</a> -&gt; <a href="hatchu.php">発注</a> -&gt; <a href="kyakuchu_kanryo.php">注文完了</a></p>
			
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
				<tr>
					<th>お客様情報</th>
				</tr>
				<tr>
					<td>お名前</td>
					<td><?php echo $name?></td>
				</tr>
				<tr>
					<td>ふりがな</td>
					<td><?php echo $kana?></td>
				</tr>
				<tr>
					<td>メモ・客注番号</td>
					<td><?php echo $memo?></td>
				</tr>
				
				<tr>
					<th>注文内容</th>
				</tr>
				<tr>
					<td>出版社</td>
					<td><?php echo $publisher?></td>
				</tr>
				<tr>
					<td>ISBN</td>
					<td><?php echo $isbn?></td>
				</tr>
				<tr>
					<td>書名</td>
					<td><?php echo $title?></td>
				</tr>
				<tr>
					<td>著者</td>
					<td><?php echo $author?></td>
				</tr>
				<tr>
					<td>ご注文数</td>
					<td><?php echo $number?></td>
				</tr>
			</table>

			<h3>注意事項</h3>
			<p>配送には1週間程度を要します。遠隔地・離島の店舗様の場合には2週間以上かかる場合もありますのでご了承ください。</p>
			<p>配送と共に送り状を送付いたします。貴店舗様で照合の上、お受け取りください。</p>
			<p>ここから余談。</p>
			<p>PHPではmail()関数で簡単にメールを送信できるって言うんで鵜呑みにして試してみればこの環境では使えなくて困った。だから代わりにPHPMailerを使う羽目になった。まぁこれも比較的簡単で助かったが。</p>
			<p>それにしてもPHPは何をするにも簡単で助かる。Perlがなかなかわからず困っていたのはいつの日やら。</p>
			<p>と思えば隣の隣にいる班はPerlでもPHPでもなくRubyで開発しようとしているそうじゃあありませんか。この流れでPython使ってくれる班があればWeb系言語勢ぞろいとなり楽しいことになりそう。</p>
			<p>え？Java？知らない子ですね(NullPointerExceptionを吐く学情のほうを見ながら</p>

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