$(document).ready(function () {
    $("#googleform").submit(function (event) {
        var name = $("#googleform input[name=name]").val();
        var pronunciation = $("#googleform input[name=pronunciation]:checked").val();
        var address = $("#googleform input[name=address]:checked").val();
        var category = $("#googleform input[name=category]:checked").val();
        var query = $("#googleform input[name=query]:checked").val();

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
                0: function () {
                    //送信に成功したときの処理
                    $("form").slideUp();
                    $('#success').slideDown();
                },
                200: function () {
                    //送信に失敗したときの処理
                    $("form").slideUp();
                    $('#error').slideDown();
                }
            }
        });
        event.preventDefault();
    });
});