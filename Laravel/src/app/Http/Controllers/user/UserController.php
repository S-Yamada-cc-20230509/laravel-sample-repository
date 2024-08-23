<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class UserController extends Controller
{
    public function top(){
        $news_lists = News::select('date','title')->orderBy('date','desc')->take(4)->get();
        return view('user.top',compact('news_lists'));
    }
    public function officialsupporter(){
        return view('user.officialsupporter.top');
    }
    public function contact(Request $request){
        $contact = $request->session()->pull('contact',[]);
        return view('user.officialsupporter.contact',compact('contact'));
    }
    public function confirm(Request $request){
        dd($request);
        $request->session()->put('contact', $request->all());
        return view('user.officialsupporter.confirm',[
            'contact' => $request->all()
        ]);
    }
}