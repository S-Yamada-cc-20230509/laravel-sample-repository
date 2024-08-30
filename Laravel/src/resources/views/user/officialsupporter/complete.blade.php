<html>
    <head>
        <title>完了画面</title>
        <link rel="stylesheet" href="{{ asset('css/user/officialsupporter/complete.css') }}">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    </head>
    <body id="body">
        <x-menu></x-menu>
        <div id="container">
            <div class="main_div">
                <div class="home_div">
                    <a href="{{ route("user.top") }}" class="home_a"><i class="material-icons top_icon">home</i></a>
                    <i class="material-icons top_icon">arrow_forward_ios</i>
                    <p>オフィシャルサポーター</p>
                </div>
                <div class="complete_div">
                    <h1 style="text-align: center">お問い合わせフォームの送信を完了致しました</h1>
                    <div class="content_div">
                        <p>
                            この度はお問い合わせいただきまして誠にありがとうございます。
                            ご入力頂いたメールアドレス宛へ、ご確認メールをお送りしておりますのでご確認ください。
                            内容を確認次第、担当者より折返しご連絡させていただきます。今しばらくお待ちくださいませ。
                        </p>
                    </div>
                    <div class="content_div">
                        <p>
                            ※ご送信後、ご確認メールが届かない場合は、フォームご入力のメールアドレスの誤り、
                            もしくはシステム等の不具合が考えられます。その際にはお手数ですが
                            もう一度ご送信下さいますか、お電話にてお問い合わせくださいますようお願い申し上げます。
                            また、まれに迷惑メールフォルダへ入っている場合がございますので、合わせてご確認ください。
                        </p>
                    </div>
                    <div class="back_btn">
                        <a href="{{ route("user.top") }}">トップページに戻る<img src="{{ asset("img/arrow_left.png") }}" class="left_img" alt="arrow_left"></a>
                    </div>
                </div>
                <div class="mobile_tag">
                    <div class="tag_div"></div>
                    <div class="tag_div"></div>
                </div>
            </div>
            <x-inquiry></x-inquiry>
            <x-footer></x-footer>
        </div>
    </body>
</html>