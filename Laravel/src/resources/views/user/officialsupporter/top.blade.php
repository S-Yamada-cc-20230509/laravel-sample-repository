<html>
    <head>
        <title>【サポート企業募集】子供たちの夢を応援しませんか?</title>
        <link rel="stylesheet" href="{{ asset('css/user/officialsupporter/top.css') }}">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
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
                <div class="official_div">
                    <img src="{{ asset("img/official_supporter_banner.jpg") }}" class="official_img" alt="オフィシャルサポーター">
                    <p class="official_p">
                        NCAジュニアアスリートクラブでは、<br>スポーツを頑張る子供たちをともに<br>サポートしてくださる方を探しています。<br>
                        子供たちの夢のために一緒に<br>応援しませんか？
                    </p>
                </div>
                <div class="supporter_div">
                    <h2 class="supporter_h2">オフィシャルサポーター</h2>
                    <div class="banner_div">
                        <a href="#" class="supporter_banner"><img src="{{ asset("img/official-supporter-1.png") }}" alt="バナー1"></a>
                        <a href="#" class="supporter_banner"><img src="{{ asset("img/official-supporter-2.png") }}" alt="バナー2"></a>
                        <a href="#" class="supporter_banner"><img src="{{ asset("img/official-supporter-4.png") }}" alt="バナー4"></a>
                    </div>
                    <div class="supporter_contact">
                        <p class="supporter_p">NCAジュニアアスリートクラブではオフィシャルサポーターを募集しております。</p>
                        <div class="contact_div">
                            <a href="{{route("user.contact.top")}}" class="contact_a">
                                <p class="contact_p">お問い合わせする<img src="{{ asset("img/arrow_right.png") }}" class="right_img" alt="arrow_right"></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mobile_tag">
                    <div class="tag_div">
                        <a href="#" class="tag_icon_a"><i class="material-icons arrow_icon">arrow_back_ios</i></a>
                        <a href="#" class="tag_a"><p>利用者の声</p></a>
                    </div>
                    <div class="tag_div">
                        <a href="#" class="tag_a" style="margin-right: 8px;"><p>NEWS</p></a>
                        <a href="#" class="tag_icon_a"><i class="material-icons arrow_icon">arrow_forward_ios</i></a>
                    </div>
                </div>
            </div>
            <x-inquiry></x-inquiry>
            <x-footer></x-footer>
        </div>
    </body>
</html>