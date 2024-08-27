<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\AtLeastOneCheckbox;

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
            'last_name_kanji' => 'required|max:50',
            'first_name_kanji' => 'required|max:50',
            'last_name_hiragana' => 'required|regex:/^[ぁ-ゞ]+$/u|max:50',
            'first_name_hiragana' => 'required|regex:/^[ぁ-ゞ]+$/u|max:50',
            'tel' => 'required|regex:/^[0-9-]+$/|max:15',
            'company_name' => 'required|max:255',
            'email' => 'required|email:strict,spoof,dns|confirmed|unique:contacts,email|max:255',
            'content' => 'required|max:1000',
            'internet_search' =>  ['required', new AtLeastOneCheckbox(['internet_search', 'acquaintance_introduction', 'sns', 'flyer', 'others'])],
            'search_word' => 'nullable|max:255',
            'acquaintance_introduction' =>  ['required', new AtLeastOneCheckbox(['internet_search', 'acquaintance_introduction', 'sns', 'flyer', 'others'])],
            'introducer_name' => 'nullable|max:50',
            'sns' =>  ['required', new AtLeastOneCheckbox(['internet_search', 'acquaintance_introduction', 'sns', 'flyer', 'others'])],
            'flyer' =>  ['required', new AtLeastOneCheckbox(['internet_search', 'acquaintance_introduction', 'sns', 'flyer', 'others'])],
            'others' =>  ['required', new AtLeastOneCheckbox(['internet_search', 'acquaintance_introduction', 'sns', 'flyer', 'others'])],
            'free_input' => 'nullable|max:255',
        ];
    }

    /**
     * Get the custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'last_name_kanji.required' => '姓は必ず指定してください。',
            'last_name_kanji.max' => '姓は、50文字以内で入力してください。',
            'first_name_kanji.required' => '名は必ず指定してください。',
            'first_name_kanji.max' => '名は、50文字以内で入力してください。',
            'last_name_hiragana.required' => 'せいは必ず指定してください。',
            'last_name_hiragana.regex' => 'せいはひらがなで入力してください。',
            'last_name_hiragana.max' => 'せいは、50文字以内で入力してください。',
            'first_name_hiragana.required' => 'めいは必ず指定してください。',
            'first_name_hiragana.regex' => 'めいはひらがなで入力してください。',
            'first_name_hiragana.max' => 'めいは、50文字以内で入力してください。',
            'tel.required' => '電話番号は必ず指定してください。',
            'tel.regex' => '電話番号は半角数字とハイフンで入力してください。',
            'tel.max' => '電話番号は、15文字以内で入力してください。。',
            'company_name.required' => '企業名・団体名は必ず指定してください。',
            'company_name.max' => '企業名・団体名は、255文字以内で入力してください。',
            'email.required' => 'メールアドレスは必ず指定してください。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'email.confirmed' => 'メールアドレスの確認が一致しません。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'content.required' => 'お問い合わせ内容は必ず指定してください。',
            'content.max' => 'お問い合わせ内容は、1000文字以内で入力してください。',
            'internet_search.required_without_all' => 'チェックボックスを一つ以上選択してください。。',
            'search_word.max' => '検索ワードは、255文字以内で入力してください。',
            'acquaintance_introduction.required_without_all' => 'チェックボックスを一つ以上選択してください。。',
            'introducer_name.max' => 'ご紹介様のお名前は、50文字以内で入力してください。',
            'sns.required_without_all' => 'チェックボックスを一つ以上選択してください。。',
            'flyer.required_without_all' => 'チェックボックスを一つ以上選択してください。。',
            'others.required_without_all' => 'チェックボックスを一つ以上選択してください。。',
            'free_input.max' => '自由欄は、255文字以内で入力してください。',
        ];
    }
}
