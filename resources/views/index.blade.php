@extends('layout.base')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">

<!-- メインビジュアル -->
<div class="main_display">
	<div class="container d-lg-none">
		<h1>歴史と大いなる自然の地、<br />高野山の麓にある<br />子どもたちの笑顔であふれるお寺</h1>
	</div>
	<div class="container d-none d-lg-block">
		<h1>歴史と大いなる自然の地、高野山の麓にある<br />子どもたちの笑顔であふれるお寺</h1>
	</div>
</div>

<div class="explain">
	<p>「こどもの寺 童楽寺」「童楽寺ホーム」は、少子高齢化が進む山村を活性化させるべく、
		<br />平成19年より 【現代版寺子屋活動】をスタートしました。地域・ボランティアにも支えられ、
		<br />青少年が抱える社会問題にも危惧しながら、子どもに関する活動全般に対して取り組んでいます。
	</p>
</div>

<!-- メインコンテンツ -->
<div class="card-group main-content">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">こどもの寺 童楽寺</h4>
			<p class="card-text">
				「いのち」の大切さを子ども達に伝えます。水子供養、先祖供養、永代供養、お盆供養、彼岸供養、葬儀など、写経体験、仏壇・墓地開眼供養、ペット供養（納骨）、遺品供養、人形供養、お焚き上げ供養をお受けしています。
			</p>
			<a href="#!" class="card-link btn btn-primary">more</a>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">童楽寺ホーム</h4>
			<p class="card-text">
				「いのち」の大切さを子ども達に伝えます。水子供養、先祖供養、永代供養、お盆供養、彼岸供養、葬儀など、写経体験、仏壇・墓地開眼供養、ペット供養（納骨）、遺品供養、人形供養、お焚き上げ供養をお受けしています。
			</p>
			<a href="#!" class="card-link btn btn-primary">more</a>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">各種イベント</h4>
			<p class="card-text">
				「いのち」の大切さを子ども達に伝えます。水子供養、先祖供養、永代供養、お盆供養、彼岸供養、葬儀など、写経体験、仏壇・墓地開眼供養、ペット供養（納骨）、遺品供養、人形供養、お焚き上げ供養をお受けしています。
			</p>
			<a href="#!" class="card-link btn btn-primary">more</a>
		</div>
	</div>
</div>

<!-- サブコンテンツ -->
<!-- ペット供養 -->
<div class="card-group">
	<div class="card card-extends">
		<div class="card-body">
			<h4 class="card-title">ペット供養</h4>
			<p class="card-text"> 生のパートナーとしての大役をこなしてきた大切なペットちゃんへ、
				<br>かけがえのない小さなご家族の最期のお見送り、恩返しを心から感謝してご供養のお手伝いをさせていただきます。
			</p>
		</div>
	</div>
	<div class="card card-extends">
		<img class="card-img" src="{{ asset('/img/index/one.jpg') }}" alt="Card image">
		<div class="card-img-overlay"></div>
	</div>
</div>
<!-- 縁結び -->
<div class="card-group">
	<div class="card card-extends">
		<img class="card-img" src="{{ asset('/img/index/two.jpg') }}" alt="Card image">
		<div class="card-img-overlay"></div>
	</div>
	<div class="card card-extends">
		<div class="card-body">
			<h4 class="card-title">お寺で縁結び</h4>
			<p class="card-text">お寺という落ち着いた空間の中で、出会いを求めてご参加なさいませんか？
				<br>住職が縁結びのお手伝いをさせていただきます。
				<br>この機会にステキなご縁を結んでみませんか。
				<p>
		</div>
	</div>
</div>
<!-- ボランティア募集 -->
<div class="card-group">
	<div class="card card-extends">
		<div class="card-body">
			<h4 class="card-title">ボランティア募集</h4>
			<p class="card-text"> 一緒に子ども達と遊んだり、宿題したり、食事を作ったり、
				<br>子ども達や童楽寺スタッフとの共同作業を通じ、自身も研鑽を深める場として、一緒に活動してみませんか？
			</p>
		</div>
	</div>
	<div class="card card-extends">
		<img class="card-img" src="{{ asset('/img/index/three.jpg') }}" alt="Card image">
		<div class="card-img-overlay"></div>
	</div>
</div>

<!-- お知らせ -->
<div class="news">
	<div class="container">
		<h2>お知らせ</h2>
		<!-- 一覧 -->
		<div class="media media-extends">
			<a href="https://placeholder.com"><img src="https://via.placeholder.com/150"></a>
			<div class="media-body">
				<h5 class="mt-0">最新のニュース１</h5>
				最新のニュース１
			</div>
		</div>
		<div class="media media-extends">
			<a href="https://placeholder.com"><img src="https://via.placeholder.com/150"></a>
			<div class="media-body">
				<h5 class="mt-0">最新のニュース２</h5>
				最新のニュース２
			</div>
		</div>
		<div class="media media-extends">
			<a href="https://placeholder.com"><img src="https://via.placeholder.com/150"></a>
			<div class="media-body">
				<h5 class="mt-0">最新のニュース３</h5>
				最新のニュース３
			</div>
		</div>
		<br><a href="#" class="btn btn-primary btn-sm">more</a>
	</div>
</div>

<!-- アクセス -->
<div class="map">
	<div class="container">
		<h2>アクセス</h1>
			<div class="google-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3300.134743462641!2d135.4961259155427!3d34.194033517691516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600725bae8c31f1b%3A0xf372617ae0888069!2z44GT44Gp44KC44Gu5a-656ul5qW95a-6!5e0!3m2!1sja!2sjp!4v1572842891607!5m2!1sja!2sjp" width="100" height="auto" frameborder="0" style="border:0;" allowfullscreen="">
				</iframe>
			</div>

			<table class="table table-responsive-">
				<tbody>
					<tr>
						<td>参拝時間のご案内</td>
						<td>午前6時00分　～　午後5時00分</td>
					</tr>
				</tbody>
				<!-- バス時刻表のリンクをつける -->
				<tbody>
					<tr>
						<td>交通機関でお越しの方</td>
						<td>JR和歌山線：笠田駅から<br>
							かつらぎコミュニティバス：新城・花園コース<br>
							下新城俵橋　下車徒歩１分</td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<td>お車でお越しの方</td>
						<td>【大阪方面から】<br>
							阪和道：岸和田和泉IC → 大野町北 → 花坂西 → 下新城俵橋バス停右折すぐ<br>
							<br>【和歌山方面から】<br>
							阪和道：和歌山IC → 京奈和道：かつらぎ西IC → <br>橋本方面：笠田駅前
							→ 花坂西：2つ目トンネル出て右折 → 下新城俵橋バス停右折すぐ<br>
							<br>【海南方面から】<br>
							阪和道：海南IC 下新城俵橋バス停右折すぐ</td>
					</tr>
				</tbody>
			</table>
	</div>
</div>
@endsection