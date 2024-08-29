@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>お知らせ登録画面</h1>
@stop

@section('content')
    <p>お知らせ登録内容</p>
    <div class="app_div">
        <form method="post" action="{{route("admin.news.update",['id'=>$news_detail->id])}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="content_div">
                <label for="date">お知らせ登録日</label>
                <input type="date" name="date" value="{{$news_detail->date->format("Y-m-d")}}">
                @if ($errors->has('date'))
                    <li class="error_msg">{{ $errors->first('date') }}</li>
                @endif
            </div>
            <div class="content_div">
                <label for="title">タイトル</label>
                <input type="text" name="title" value="{{$news_detail->title}}">
                @if ($errors->has('title'))
                    <li class="error_msg">{{ $errors->first('title') }}</li>
                @endif
            </div>
            <div class="content_div">
                <label for="explanation">説明</label>
                <textarea class="content_textarea" name="explanation">{{$news_detail->explanation}}</textarea>
                @if ($errors->has('explanation'))
                    <li class="error_msg">{{ $errors->first('explanation') }}</li>
                @endif
            </div>
            <div class="content_div">
                <label for="image_path">画像</label>
                <img src="{{asset($news_detail->image_path)}}">
                @if ($errors->has('image_path'))
                    <li class="error_msg">{{ $errors->first('image_path') }}</li>
                @endif
            </div>
            <div>
                <button type="submit" class="add_btn">更新する</button>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin/news_detail.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop