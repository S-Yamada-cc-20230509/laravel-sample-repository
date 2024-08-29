@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>お知らせ登録画面</h1> <!-- 一覧画面なら管理者一覧 -->
@stop

@section('content')
    <p>お知らせ登録内容</p>
    <div class="app_div">
        <table>
            <thead>
                <tr>
                    <th >お知らせ登録日</th>
                    <th >タイトル</th>
                    <th >説明</th>
                    <th>詳細</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $val)
                    <tr>          
                        <td>{{$val->date->isoformat("YYYY/MM/DD(ddd)")}}</td>
                        <td>{{Str::limit($val->title, 10,"…")}}</td>
                        <td>{{Str::limit($val->explanation,30,"…")}}</td>
                        <td><a href="{{route('admin.news.detail',['id'=>$val->id])}}">詳細</a></td>
                        <td><a href="#">削除</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin/news_list.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop