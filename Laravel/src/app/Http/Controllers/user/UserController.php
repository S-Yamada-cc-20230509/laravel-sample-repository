<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Contact;
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
    public function confirm(ContactFormRequest $request){
        $request->session()->put('contact', $request->all());
        return view('user.officialsupporter.confirm',[
            'contact' => $request->all()
        ]);
    }
    public function complete(ContactFormRequest $request){
        $contact = new Contact();

        $contact->last_name_kanji = $request->last_name_kanji;
        $contact->first_name_kanji = $request->first_name_kanji;
        $contact->last_name_hiragana = $request->last_name_hiragana;
        $contact->first_name_hiragana = $request->first_name_hiragana;
        $contact->tel = $request->tel;
        $contact->company_name = $request->company_name;
        $contact->email = $request->email;
        $contact->content = $request->content;
        $contact->internet_search = $request->internet_search;
        $contact->search_word = $request->search_word;
        $contact->acquaintance_introduction = $request->acquaintance_introduction;
        $contact->introducer_name = $request->introducer_name;
        $contact->sns = $request->sns;
        $contact->flyer = $request->flyer;
        $contact->others = $request->others;
        $contact->free_input = $request->free_input;

        $contact->save();

        $request->session()->forget('contact');
        return view('user.officialsupporter.complete');
    }
}