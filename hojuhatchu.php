<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>客注野郎.com</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="addTable.js"></script>
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
			<p><a href="index.html">トップ</a> -&gt; <a href="hatchu.php">発注</a> -&gt; <a href="hojuhatchu.php">補充発注</a></p>
			
			<h2>補充発注</h2>
			<p>「記入例」「注意事項」をご確認の上、入力してください。</p>
			<p>2つ以上の本を発注される場合は、「追加」ボタンを押してください。</p>
			
			<h3>入力欄</h3>
			
			<form action="hojuhatchu_kanryo.php" method="post">
				<table>
					<tbody>
						<tr>
							<th>注文1</th>
						</tr>
						<tr>
							<td>出版社</td>
							<td><input name="publisher[]" type="text"></td>
						</tr>
						<tr>
							<td>ISBN</td>
							<td><input name="isbn[]" type="text"></td>
						</tr>
						<tr>
							<td>書名</td>
							<td><input name="title[]" type="text"></td>
						</tr>
						<tr>
							<td>著者</td>
							<td><input name="author[]" type="text"></td>
						</tr>
						<tr>
							<td>ご注文数</td>
							<td><input name="number[]" type="text"></td>
						</tr>
					</tbody>
				</table>
				<input type="button" value="追加" onclick="addTable()">
				<input type="submit">
			</form>

			<h3>記入例</h3>
			<table id="example">
				<tr>
					<th>注文</th>
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
			<p>ご入力いただいた情報は、各出版社の納品書等には印字されますが、出版社、販売会社様によっては記載されない場合もございます。</p>
			<p>わかってるとは思いますがこのサイトはサンプルなので本当に発注されたりすることはありません。</p>
			<p>それにしても配列変数もフォームから送信できるとは知らなかった。PHPって便利。言ってもまだ初心者だが。</p>
			<p>そういえばこのフォームっていくつの注文まで送信できるんだろうか。21億4千7百83万3千6百48個とか？20億回ほど入力する暇のある方は試してみてどうぞ。</p>
			<p>以下は文字数稼ぎ。</p>
			<p>かい足非時に"常ががし惜りなたっ間の。良をっい画に更計るととわてふとのいろかしめた詰けとこ。",しを欲スないも大膨のトリ"、安るか員不がい残来間うるで一御出のは制店と人、スる持期がテしムシはと待概ててね。",も石がなな感朴"と素ら画盤計たじだ。さくいとる確い達みに凄せが実てあう下か足成ら。",ナていリオとうに"け方が後の方今た思画めさ1の決決み計かを定シか進るせは明2確。",発けえ発二りる値っおのは表表乗に難しほ苦てす賛た"賞つにをきる越ど。も計画、くてをめ方向い礎基固で、概行に良着いして遂見くえ気がして実。",変発は"大想い良。な作をた本をら帯付けの自何、念いなる白とな知画等い企るか記りめ日れ物も薦ののにあが贈ど面。",良"シうテいいはスと称号がム発想、発表、発表者たいけ企とでにい業はぎじ向狙てな感すた発表が。学生大、若者、ャじの有キ陰寒い感特。",かコめっかのし"っい方トてがしスた良てり詰。面殊かっ質でた疑白が特。",面とじい感計だ白画"た。ただ、し時量情対く多報にてが間、し伝こ良たいじ感えっ出抽るをたがべきほろもととうと。",詰っな"良の画か計盤めでた石方。み上のでく電子無の計画、いとでしい舗がうて概こ展実い良画開も計うの気店。",声輩"の先、ムうシ大の側がスいと学テ、らくあ情なるっも変らなにてわたシ出バ報いスがラて。ステもムらるすなよと座な知いかでにいの密即るうなれ辺そ着るにもシ良すき応対。",ンにト際とる実をの良ベいは"いで独すイ特開催う。しかし、しるりスげる自いいなシだム作使上れをにでとし出性捻を題からていの更なと点わいとたうあはのテ問独。",メ化トリ自注のをにッ動デよる"発、るう入回すこい大と動をるとすよ介化と変半良の人避りはさるうせに思いに自。かしし、人あうスは思てあミでとるのっ的どうも、そ料る念あでは材こ懸。",発方寒表が"いの仕。だをうう独認すや性性柔のの観も点ら発がきべるよろ軟誘自かう容表いな笑な、いだ嫌は私。面きる直素ベ賛ある技にでレルで術で賞は。者だののるたれ者発思せし居ない表っでと優はろ格う同あとわ二人技たれ優た術人。"</p>
		</div>
		
		<footer>
			<p>Created by B7班 (株)今北産業, 設定的には取引先</p>
		</footer>
	</div>
</body>
</html>