<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>童楽寺 公式サイト</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/css/base.css') }}">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar fixed-top">
		<div class="logo">
			<a class="navbar-brand" href="{{ url('/') }}">
				<span class="font-sm">救世観音宗 こどもの寺</span>
				<br>童楽寺
			</a>
		</div>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="Navber">
			<ul class="navbar-nav w-100 nav-justified">
				<li class="nav-item">
					<a class="nav-link" href="{{ action('AboutController@about') }}">寺院情報</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">こどもの寺 童楽寺</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">童楽寺ホーム</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">ボランティア募集</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">ご寄付</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">お知らせ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ action('ContactController@contact') }}">お問い合わせ</a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div>
		@yield('content')
	</div>

	<footer class="footer mt-auto">
		<div class="ft-address">
			<h1>救世観音宗 こどもの寺 童楽寺</h1>
			〒640-1481<br />
			和歌山県伊都郡かつらぎ町大字新城533-1<br />
			TEL：<a href=tel:+81-736-26-0855>0736-26-0855</a>
		</div>
		<div class="ft-copyright">
			© 2020 救世観音宗 こどもの寺 童楽寺
		</div>
		<footer>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>