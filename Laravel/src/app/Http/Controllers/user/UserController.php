<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\News;

class UserController extends Controller
{
    public function top(){
        $news_lists = News::select('date','title')->orderBy('date','desc')->take(4)->get();
        return view('user.top',compact('news_lists'));
    }
}