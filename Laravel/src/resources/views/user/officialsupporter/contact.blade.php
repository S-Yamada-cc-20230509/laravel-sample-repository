<html>
    <head>
        <title>オフィシャルサポーター</title>
        <link rel="stylesheet" href="{{ asset('css/user/officialsupporter/contact.css') }}">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
                <div class="input_div">
                    <h2 class="contact_h2">お問い合わせ</h2>
                    <form method="post" action="{{ route("user.contact.confirm") }}">
                        {{csrf_field()}}
                        <h3>お名前<span style="color: #d30000">*</span></h3>
                        <div class="error_div">
                            <div>
                                @if ($errors->has('last_name_kanji'))
                                    <li class="error_msg">{{ $errors->first('last_name_kanji') }}</li>
                                @endif
                            </div>
                            <div class="error_right">
                                @if ($errors->has('first_name_kanji'))
                                    <li class="error_msg">{{ $errors->first('first_name_kanji') }}</li>
                                @endif
                            </div>
                        </div>
                        <div class="input_box">
                            <div class="input_part">
                                <label for="last_name_kanji" class="part_label">姓</label>
                                <input class="text_input" type="text" name="last_name_kanji" value="{{ old('last_name_kanji', $contact['last_name_kanji'] ?? '') }}" placeholder="山田" maxlength="50" required>
                            </div>
                            <div class="input_part">
                                <label for="first_name_kanji" class="part_label">名</label>
                                <input class="text_input" type="text" name="first_name_kanji" value="{{ old('first_name_kanji', $contact['first_name_kanji'] ?? '') }}" placeholder="太郎" maxlength="50" required>
                            </div>
                        </div>
                        <h3>ふりがな<span style="color: #d30000">*</span></h3>
                        <div class="error_div">
                            <div>
                                @if ($errors->has('last_name_hiragana'))
                                    <li class="error_msg">{{ $errors->first('last_name_hiragana') }}</li>
                                @endif
                            </div>
                            <div class="error_right_hiragana">
                                @if ($errors->has('first_name_hiragana'))
                                    <li class="error_msg">{{ $errors->first('first_name_hiragana') }}</li>
                                @endif
                            </div>
                        </div>
                        <div class="input_box">
                            <div class="input_part">
                                <label for="last_name_hiragana" class="part_label">せい</label>
                                <input class="text_input" type="text" name="last_name_hiragana" value="{{ old('last_name_hiragana', $contact['last_name_hiragana'] ?? '') }}"  placeholder="やまだ" maxlength="50" required>
                            </div>
                            <div class="input_part">
                                <label for="first_name_hiragana" class="part_label">めい</label>
                                <input class="text_input" type="text" name="first_name_hiragana" value="{{ old('first_name_hiragana', $contact['first_name_hiragana'] ?? '') }}"  placeholder="たろう" maxlength="50" required>
                            </div>
                        </div>
                        <label for="tel" class="input_label"><h3>電話番号<span style="color: #d30000">*</span></h3></label>
                        @if ($errors->has('tel'))
                            <li class="error_msg">{{ $errors->first('tel') }}</li>
                        @endif
                        <input class="text_input_w100" type="text" name="tel" value="{{ old('tel', $contact['tel'] ?? '') }}"  placeholder="080-1234-567" maxlength="15" required>
                        <label for="company_name" class="input_label"><h3>企業名・団体名<span style="color: #d30000">*</span></h3></label>
                        @if ($errors->has('company_name'))
                            <li class="error_msg">{{ $errors->first('company_name') }}</li>
                        @endif
                        <input class="text_input_w100" type="text" name="company_name" value="{{ old('company_name', $contact['company_name'] ?? '') }}"  placeholder="株式会社〇〇" maxlength="255" required>
                        <label for="email" class="input_label"><h3>メールアドレス<span style="color: #d30000">*</span></h3></label>
                        @if ($errors->has('email'))
                            <li class="error_msg">{{ $errors->first('email') }}</li>
                        @endif
                        <input class="text_input_w100" type="text" name="email" value="{{ old('email', $contact['email'] ?? '') }}"  placeholder="text@gmail.com" maxlength="255" required>
                        <label for="email_confirmation" class="input_label"><h3>メールアドレス(確認用)<span style="color: #d30000">*</span></h3></label>
                        @if ($errors->has('email_confirmation'))
                            <li class="error_msg">{{ $errors->first('email_confirmation') }}</li>
                        @endif
                        <input class="text_input_w100" type="text" name="email_confirmation" value  placeholder="text@gmail.com" maxlength="255" required>
                        <label for="content" class="input_label"><h3>お問い合わせ内容<span style="color: #d30000">*</span></h3></label>
                        @if ($errors->has('content'))
                            <li class="error_msg">{{ $errors->first('content') }}</li>
                        @endif
                        <br>
                        <textarea class="textarea" name="content" placeholder="お問い合わせ内容" maxlength="1000" required>{{ old('content', $contact['content'] ?? '') }}</textarea>
                        <br>
                        <label><h3>当サイトを知ったきっかけ<span style="color: #d30000">*</span></h3></label>
                        @if ($errors->has('internet_search') || $errors->has('acquaintance_introduction') || $errors->has('sns') || $errors->has('flyer') || $errors->has('others'))
                            <li class="error_msg">チェックボックスを1つ以上選択してください。</li>
                        @endif
                        <div>
                            <div class="checkbox_div">
                                <input type='hidden' name='internet_search' value='0'>
                                <input type="checkbox" class="checkbox" name="internet_search" value="1" required="required">
                                <label for="internet_search" class="checkbox_label">ネット検索</label>
                            </div>
                            <input class="questionary_input" type="text" name="search_word" value="{{ old('search_word', $contact['search_word'] ?? '') }}"  placeholder="検索ワード">
                            @if ($errors->has('search_word'))
                                <li class="error_msg">{{ $errors->first('search_word') }}</li>
                            @endif
                            <div class="checkbox_div">
                                <input type='hidden' name='acquaintance_introduction' value='0'>
                                <input type="checkbox" class="checkbox" name="acquaintance_introduction" value="1" required="required">
                                <label for="acquaintance_introduction" class="checkbox_label">知人の紹介</label>
                            </div>
                            <input class="questionary_input" type="text" name="introducer_name" value="{{ old('introducer_name', $contact['introducer_name'] ?? '') }}" placeholder="ご紹介様のお名前">
                            @if ($errors->has('introducer_name'))
                                <li class="error_msg">{{ $errors->first('introducer_name') }}</li>
                            @endif
                            <div class="checkbox_div">
                                <input type='hidden' name='sns' value='0'>
                                <input type="checkbox" class="checkbox" name="sns" value="1" required="required">
                                <label for="sns" class="checkbox_label">SNS</label>
                            </div>
                            <div class="checkbox_div">
                                <input type='hidden' name='flyer' value='0'>
                                <input type="checkbox" class="checkbox" name="flyer" value="1" required="required">
                                <label for="flyer" class="checkbox_label">チラシ</label>
                            </div>
                            <div class="checkbox_div">
                                <input type='hidden' name='others' value='0'>
                                <input type="checkbox" class="checkbox" name="others" value="1" required="required">
                                <label for="others" class="checkbox_label">その他</label>
                            </div>
                            <input class="questionary_input" type="text" name="free_input" value="{{ old('free_input', $contact['free_input'] ?? '') }}" placeholder="ご自由にご入力ください">
                            @if ($errors->has('free_input'))
                                <li class="error_msg">{{ $errors->first('free_input') }}</li>
                            @endif
                        </div>
                        <div>
                            <button type="submit" id="submit" class="contact_btn">確認画面へ<img src="{{ asset("img/arrow_right.png") }}" class="right_img" alt="arrow_right"></button>
                        </div>
                    </form>
                    <div class="back_btn">
                        <a href="{{ route("user.officialsupporter.top") }}">戻る<img src="{{ asset("img/arrow_left.png") }}" class="left_img" alt="arrow_right"></a>
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
        <script src="{{ asset('/js/contact_top.js') }}"></script>
    </body>
</html>