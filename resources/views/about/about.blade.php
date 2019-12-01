@extends('layout.base')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/about/about.css') }}">

<div class="about-title">
    <div class="card card-extends title-card">
        <img class="card-img card-img-extends" src="{{ asset('/img/about/title.png') }}" alt="Card image">
        <div class="card-img-overlay card-img-overlay-extends">
            <h1>寺院情報</h1>
        </div>
    </div>
</div>

<!-- パンくず -->
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="../index.html">ホーム</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                寺院情報
            </li>
        </ol>
    </nav>

    <!-- 下層リンク -->
    <div>
        <p>
            <strong>こどもの寺<ruby>
                    <rb>童楽寺</rb>
                    <rp>（</rp>
                    <rt>どうがくじ</rt>
                    <rp>）</rp>
                </ruby></strong>
            は、正しくは
            <strong><ruby>
                    <rb>宝珠山</rb>
                    <rp>（</rp>
                    <rt>ほうしゅざん</rt>
                    <rp>）</rp>
                </ruby>童楽寺</strong>
            といい、宗派は真言宗
            <ruby>
                <rb>（救世観音宗）</rb>
                <rp>（</rp>
                <rt>ぐぜかんのんきょう</rt>
                <rp>）</rp>
            </ruby>。
            総本山は、桜で有名な西国第二番札所 紀三井寺 （和歌山市）になります。
        </p>
        <p>
            童楽寺では宗旨宗派など問わず、読んで字のごとく、
            子ども達が楽しく集い合うことをモットーとした、
            いわば<strong>現代版寺子屋</strong>を目指しています。
        </p>

        <p>
            少子高齢化・過疎化の進む山村を何とか活性化させたいという思いで、
            2007年より<strong>現代版 寺子屋活動</strong> を開始しました。
        </p>

        <p>
            青少年が抱える社会問題にも危惧しながら、和歌山県から専門里親の認定を受け、
            子どもに関する活動全般に、ボランティアと共に、幅広く取り組んでいます。
        </p>

        <p>
            寺子屋と言えども、特別なことは何もなく、
            「ありがとう」、「ごめんなさい」の心を大切にし、
            一日一日の無事と感謝を祈りながら、子ども達とごく当たり前の生活を送っています。
        </p>

        <!-- <p>
            世界遺産 高野山 の麓の大自然あふれる環境をフルに活用し、
            子ども達の心身発育を図るべく <strong>プチ一休さん体験</strong> を実施しています。
        </p> -->


        <div class="card-deck card-deck-extends">
            <div class="card card-extends">
                <img class="card-img" src="{{ asset('/img/about/card.png') }}" alt="Card image">
                <div class="card-img-overlay">
                    <h3>スタッフ紹介</h3>
                </div>
            </div>
            <div class="card card-extends">
                <img class="card-img" src="{{ asset('/img/about/card.png') }}" alt="Card image">
                <div class="card-img-overlay">
                    <h3>年間行事</h3>
                </div>
            </div>
            <div class="card card-extends">
                <img class="card-img" src="{{ asset('/img/about/card.png') }}" alt="Card image">
                <div class="card-img-overlay">
                    <h3>加入団体</h3>
                </div>
            </div>
        </div>
    </div>

    @endsection