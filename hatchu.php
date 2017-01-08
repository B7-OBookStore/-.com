<?php
$dsn = 'mysql:dbname=kyakuchuyaro;host=ja-cdbr-azure-east-a.cloudapp.net;charset=utf8';
$username = 'b53c33466811d4';
$password = '74c1d5e0';
$pdo = new PDO($dsn, $username, $password);
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
			<p><a href="index.html">トップ</a> -&gt; <a href="hatchu.php">発注</a></p>
			
			<h2>発注</h2>
			<nav><p><a href="hojuhatchu.php">補充発注へ</a><a href="kyakuchu.php">客注へ</a></nav></nav>
			
			<h3>登録書籍一覧</h3>
			<table>
				<tr>
					<th>書名</th>
					<th>出版社</th>
					<th>ISBN</th>
					<th>著者</th>
				</tr>
				<?php
					$reg_sql = "SELECT * FROM registeredbook WHERE ShopNumber = 0";
					$reg_stmt = $pdo->query($reg_sql);
 
					foreach ($reg_stmt as $row) {
						$bookNumber = $row['BookNumber'];
						$book_sql = "SELECT * FROM book WHERE BookNumber=$bookNumber";
						$book_stmt = $pdo->query($book_sql);
						$book = $book_stmt->fetch();

						echo '<tr>';
							echo "<td>$book[Title]</td>";
							echo "<td>$book[Publisher]</td>";
							echo "<td>$book[ISBN]</td>";
							echo "<td>$book[Author]</td>";
							echo '<td><a href="hojuhatchu.php">補充発注に追加</a></td>';
							echo '<td><a href="kyakutyu.php">客注に追加</a></td>';
						echo '</tr>';
					}
				?>
			</table>
		</div>
		
		<footer>
			<p>Created by B7班 (株)今北産業, 設定的には取引先</p>
		</footer>
	</div>
</body>
</html>