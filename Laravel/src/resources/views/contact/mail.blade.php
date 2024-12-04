<html>
    <head>
    <style>
        h1 {
        font-size: 18px;
        }
        p {
        font-size: 14px;
        }
    </style>
    </head>
    <body>
    <h1>{{$data->company_name}}の{{$data->last_name_kanji}}{{$data->first_name_kanji}}様からの、お問い合わせを受信しました。</h1>

    <p>メールアドレス: {{$data->email}}</p>
    <p>内容:  {!! nl2br(e($data->content)) !!}</p>
    </body>
</html>