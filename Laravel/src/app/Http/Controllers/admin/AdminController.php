<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\NewsFormRequest;
use App\Http\Requests\UpdateNewsFormRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function top(){
        return view("auth.adminlte");
    }
    public function add(){
        return view("auth.news.add");
    }
    public function list(){
        $news = News::orderBy('date','desc')->get();
        return view("auth.news.list",compact("news"));
    }
    public function addNews(NewsFormRequest $request){
        $news = new News();

        $dir = 'img';
        $file_name = $request->file('image_path')->getClientOriginalName();
        $request->file('image_path')->storeAs('public/' . $dir, $file_name);
        $path = 'storage/' . $dir . '/' . $file_name;

        $news->date = $request->date;
        $news->title = $request->title;
        $news->explanation = $request->explanation;
        $news->image_path = $path;
        
        $news->save();

        return redirect()->route('admin.addnews');
    }
    public function detail($id){
        $news_detail = News::find($id);
        return view("auth.news.detail",compact("news_detail"));
    }
    public function update(UpdateNewsFormRequest $request){
        $news_update = News::find($request->id);  
        $news_update->update([  
        "date" => $request->date,  
        "title" => $request->title,  
        "explanation" => $request->explanation
    ]);  

    return redirect()->route('admin.news.list');  
    }
}
