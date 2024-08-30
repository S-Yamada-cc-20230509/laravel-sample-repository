<head>
    <link rel="stylesheet" href="{{ asset('css/user/menu.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="menu" style="left: 0; top: 0;">
        <a href="{{ route('user.top') }}">
            <img src="{{ asset("img/logo.jpg") }}" class="menu_logo" alt="NCA">
        </a>
        <ul class="menu_ul">
            <li><a href="{{ route("user.top") }}" class="menu_top">TOP</a></li>
            <li><a href="#" class="menu_a">NCAジュニアストリートクラブとは</a></li>
            <li><a href="#" class="menu_a">コンディショニングとは</a></li>
            <li><a href="#" class="menu_a">開発者・与志江について</a></li>
            <li><a href="#" class="menu_a">実践しているアスリートたち</a></li>
            <li><a href="#" class="menu_a">サービス内容</a></li>
            <li><a href="#" class="menu_a">料金</a></li>
            <li><a href="#" class="menu_a">利用者の声</a></li>
            <li><a href="{{ route("user.officialsupporter.top") }}" class="menu_a">オフィシャルサポーター</a></li>
            <li><a href="#" class="menu_a">NEWS</a></li>
            <li><a href="#" class="menu_a">よくある質問・お問い合わせ</a></li>
        </ul>
        <div class="menu_btn" style="margin-top: 2em;">
            <a href="#"><i class="material-icons">edit_note</i>新規会員登録</a>
        </div>
        <div class="menu_btn">
            <a href="#"><i class="material-icons">login</i>ログイン</a>
        </div>
        <div class="menu_mobile">
            <a href="#" class="menu_a">
                <figure class="menu_figure">
                    <i class="material-icons  menu_icon">login</i>
                    <figcaption class="menu_figcaption">LOGIN</figcaption>
                </figure>
            </a>
            <a href="#" class="menu_a">
                <figure class="menu_figure">
                    <i class="material-icons menu_icon" style="width: 100%;">menu</i>
                    <figcaption class="menu_figcaption">MENU</figcaption>
                </figure>
            </a>
        </div>
    </div>
</body>