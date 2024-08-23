<html>
    <head>
        <title>確認画面</title>
        <link rel="stylesheet" href="{{ asset('css/user/officialsupporter/contact.css') }}">
        <link rel="icon" href="img/favicon.ico">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    </head>
    <body id="body">
        <x-menu></x-menu>
        <div id="container">
            <div class="main_div">
                <div class="input_div">
                    <h2 class="contact_h2">お問い合わせ確認画面</h2>
                    <form method="post" action="">
                        {{csrf_field()}}
                        <h3>お名前<span style="color: #d30000">*</span></h3>
                        <div class="input_box">
                            <div class="input_part">
                                <label for="last_name_kanji" class="part_label">姓</label>
                                <input class="text_input" type="text" name="last_name_kanji" value="{{$contact['last_name_kanji']}}" readonly>
                            </div>
                            <div class="input_part">
                                <label for="first_name_kanji" class="part_label">名</label>
                                <input class="text_input" type="text" name="first_name_kanji" value="{{$contact['first_name_kanji']}}" readonly>
                            </div>
                        </div>
                        <h3>ふりがな<span style="color: #d30000">*</span></h3>
                        <div class="input_box">
                            <div class="input_part">
                                <label for="last_name_hiragana" class="part_label">せい</label>
                                <input class="text_input" type="text" name="last_name_hiragana" value="{{$contact['last_name_hiragana']}}" readonly>
                            </div>
                            <div class="input_part">
                                <label for="first_name_hiragana" class="part_label">めい</label>
                                <input class="text_input" type="text" name="first_name_hiragana" value="{{$contact['first_name_hiragana']}}" readonly>
                            </div>
                        </div>
                        <label for="tel" class="input_label"><h3>電話番号<span style="color: #d30000">*</span></h3></label>
                        <input class="text_input_w100" type="text" name="tel" value="{{$contact['tel']}}" readonly>
                        <label for="company_name" class="input_label"><h3>企業名・団体名<span style="color: #d30000">*</span></h3></label>
                        <input class="text_input_w100" type="text" name="company_name" value="{{$contact['company_name']}}" readonly>
                        <label for="email" class="input_label"><h3>メールアドレス<span style="color: #d30000">*</span></h3></label>
                        <input class="text_input_w100" type="text" name="email" value="{{$contact['email']}}" readonly>
                        <!--メールアドレス(確認用)-->
                        <input class="text_input_w100" type="hidden" name="email_confirmation" value="{{$contact['email_confirmation']}}" readonly>
                        <label for="content" class="input_label"><h3>お問い合わせ内容<span style="color: #d30000">*</span></h3></label>
                        <br>
                        <textarea class="textarea" name="content" value="{{$contact['content']}}" readonly></textarea>
                        <br>
                        <label><h3>当サイトを知ったきっかけ<span style="color: #d30000">*</span></h3></label>
                        <div>
                            <div class="checkbox_div">
                                <input type="checkbox" name="internet_search" value readonly>
                                <label for="internet_search" class="checkbox_label">ネット検索</label>
                            </div>
                            <input class="questionary_input" type="text" name="search_word" value readonly>
                            <div class="checkbox_div">
                                <input type="checkbox" name="acquaintance_introduction" value readonly>
                                <label for="acquaintance_introduction" class="checkbox_label">知人の紹介</label>
                            </div>
                            <input class="questionary_input" type="text" name="introducer_name" value readonly>
                            <div class="checkbox_div">
                                <input type="checkbox" name="sns" value readonly>
                                <label for="sns" class="checkbox_label">SNS</label>
                            </div>
                            <div class="checkbox_div">
                                <input type="checkbox" name="flyer" value readonly>
                                <label for="flyer" class="checkbox_label">チラシ</label>
                            </div>
                            <div class="checkbox_div">
                                <input type="checkbox" name="others" value readonly>
                                <label for="others" class="checkbox_label">その他</label>
                            </div>
                            <input class="questionary_input" type="text" name="free_input" readonly>
                        </div>
                        <div>
                            <button type="submit" class="contact_btn">完了画面へ<img src="{{asset("img/arrow_right.png")}}" class="right_img" alt="arrow_right"></button>
                        </div>
                    </form>
                    <div class="back_btn">
                        <a href="{{route("user.contact.top")}}">戻る<img src="{{asset("img/arrow_left.png")}}" class="left_img" alt="arrow_right"></a>
                    </div>
                </div>
            </div>
            <x-inquiry></x-inquiry>
            <x-footer></x-footer>
        </div>
    </body>
</html>