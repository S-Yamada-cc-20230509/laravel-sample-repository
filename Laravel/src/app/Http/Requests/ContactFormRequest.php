<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name_kanji' => 'required' ,
            'first_name_kanji' => 'required' ,
            'last_name_hiragana' => 'required' ,
            'first_name_hiragana' => 'required' ,
            'tel' => 'required' ,
            'company_name' => 'required' ,
            'email' => 'required|email:strict,spoof,dns|confirmed',
            'email_confirmation' => 'required|email:strict,spoof,dns|max:254',
            'content' => 'required' ,
            'internet_search' => 'required' ,
            'search_word' => 'required' ,
            'acquaintance_introduction' => 'required' ,
            'introducer_name' => 'required' ,
            'sns' => 'required' ,
            'flyer' => 'required' ,
            'others' => 'required' ,
            'free_input' => 'required' ,
        ];
    }
    public function messages(){
        return [
            
        ];
    }
}
