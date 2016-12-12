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
			<p><a href="index.html">トップ</a> -&gt; <a href="hatchu.php">発注</a> -&gt; <a href="kyakuchu.php">客注</a></p>
			
			<h2>客注</h2>
			<p>「記入例」「注意事項」をご確認の上、入力してください。</p>
			<p>個人情報保護のため、個人を特定できる情報の印字をご希望されない場合は、メモ欄に貴店様の客注番号等をご入力ください。</p>
			
			<h3>入力欄</h3>
			
			<form action="chumonkanryo.php" method="post">
				<table>
					<tr>
						<th>お客様情報</th>
					</tr>
					<tr>
						<td>お名前</td>
						<td><input name="name" type="text"></td>
					</tr>
					<tr>
						<td>ふりがな</td>
						<td><input name="kana" type="text"></td>
					</tr>
					<tr>
						<td>メモ・客注番号</td>
						<td><input name="memo" type="text"></td>
					</tr>
					
					<tr>
						<th>注文内容</th>
					</tr>
					<tr>
						<td>出版社</td>
						<td><input name="publisher" type="text"></td>
					</tr>
					<tr>
						<td>ISBN</td>
						<td><input name="isbn" type="text"></td>
					</tr>
					<tr>
						<td>書名</td>
						<td><input name="title" type="text"></td>
					</tr>
					<tr>
						<td>著者</td>
						<td><input name="author" type="text"></td>
					</tr>
					<tr>
						<td>ご注文数</td>
						<td><input name="number" type="text"></td>
					</tr>
				</table>
				<input type="submit">
			</form>
			
			<h3>記入例</h3>
			<table id="example">
				<tr>
					<th>お客様情報</th>
				</tr>
				<tr>
					<td>お名前</td>
					<td>田崎あさひ</td>
				</tr>
				<tr>
					<td>ふりがな</td>
					<td>たさきあさひ</td>
				</tr>
				<tr>
					<td>メモ・客注番号</td>
					<td>B1TT3RSW33T</td>
				</tr>
				
				<tr>
					<th>注文内容</th>
				</tr>
				<tr>
					<td>出版社</td>
					<td>オークラ出版</td>
				</tr>
				<tr>
					<td>ISBN</td>
					<td>9784775505229</td>
				</tr>
				<tr>
					<td>書名</td>
					<td>それいけ、白井先生！</td>
				</tr>
				<tr>
					<td>著者</td>
					<td>高円寺葵子</td>
				</tr>
				<tr>
					<td>ご注文数</td>
					<td>1024</td>
				</tr>
			</table>
			
			<h3>注意事項</h3>
			<p>ふりがな(全角かな20文字まで)は必ずご入力ください。</p>
			<p>メモ・客注番号欄には、貴店様で判断できる客注番号をご入力ください。</p>
			<p>ご入力いただいた情報は、各出版社の納品書等には印字されますが、出版社、販売会社様によっては記載されない場合もございます。</p>
			<p>わかってるとは思いますがこのサイトはサンプルなので本当に発注されたりすることはありません。</p>
		</div>
		
		<footer>
			<p>Created by B7班 (株)今北産業, 7051-1076 福野将人</p>
		</footer>
	</div>
</body>
</html>