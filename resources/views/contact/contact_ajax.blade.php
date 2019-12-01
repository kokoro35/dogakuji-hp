@extends('./layout.base')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
<!-- <script type="text/javascript" src="{{ asset('/js/contact.js') }}"></script> -->

<div class="container form-container" id="googleform">
    <div class="form-comment">
        <h3>お問い合わせフォーム</h3>
        当サイトに関する質問をお受けしています。<br>
        以下のフォームより、必要事項を入力のうえ送信してください。
    </div>

    <form>
        <div class="form-group">
            <label>お名前</label>
            <input type="text" name="entry.392083194" require="required" placeholder="お名前" size="30" class="form-control gfrom" id="name">

            <label>フリガナ</label>
            <input type="text" name="entry.318614566" require="required" placeholder="フリガナ" size="30" class="form-control gfrom" id="pronunciation">

            <label>メールアドレス</label>
            <input type="email" name="emailAddress" require="required" placeholder="メールアドレス" class="form-control gfrom" id="address">

            <label>お問い合わせ種別</label>
            <select name="entry.2098971487" class="form-control gfrom" id="category">
                <option value="ご葬儀・ご供養について">ご葬儀・ご供養について</option>
                <option value="童楽寺ホーム（現代版寺小屋活動）について">童楽寺ホーム（現代版寺小屋活動）について</option>
                <option value="ボランティアについて">ボランティアについて</option>
                <option value="イベントについて">イベントについて</option>
                <option value="アクセスについて">アクセスについて</option>
                <option value="ご寄付について">ご寄付について</option>
                <option value="その他のご質問">その他のご質問</option>
            </select>

            <label>お問い合わせ内容</label>
            <input type="textarea" name="entry.999736214" require="required" placeholder="内容をご記入ください" class="form-control gfrom gform-textarea" id="query">

            <input type="button" onClick="postToGoogle()" value="送信" class="btn btn-primary gform-btn">
        </div>

        <div class="form-comment">
            <h5>個人情報の取扱いについて</h3>
                ご記入いただいた個人情報は、お問い合わせへの対応および確認のためのみに利用いたします。<br>
                上記の目的のためにお問い合わせの記録を残すことがございます。
        </div>
    </form>

</div>

<script>
    function postToGoogle() {

        var name = $('[name="entry.392083194"]').val();
        var pronunciation = $('[name="entry.318614566"]').val();
        var address = $('[name="emailAddress"]').val();
        var category = $('[name="entry.2098971487"]').val();
        var query = $('[name="entry.999736214"]').val();

        //urlやentryは書き換えてね。
        $.ajax({
            url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLScYCjoZklzlmUQTeyABZx0ZeHbLUuDGG4H8x5AfKpZsXfywtA/formResponse",
            data: {
                "entry.392083194": name,
                "entry.318614566": pronunciation,
                "emailAddress": address,
                "entry.2098971487": category,
                "entry.999736214": query
            },
            type: "POST",
            dataType: "xml",
            statusCode: {
                200: function() {
                    //Success message
                    location.href = "/";
                },
                // 400: function() {
                //     //Success Message
                //     alert('エラー');
                // }
            }
        });
    }
</script>

@endsection