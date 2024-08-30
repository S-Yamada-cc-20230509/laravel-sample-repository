<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsFormRequest extends FormRequest
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
            "date" => "required|date|after_or_equal:today",
            "title" => "required|max:255",
            "explanation" => "required|max:1000",
        ];
    }
    public function messages()
    {
        return [
            "date.required" => "日付は必ず入力してください。",
            "date.date" => "必ず日付形式で入力してください。",
            "date.after_or_equal" => "日付は今日以降の日付で入力してください。",
            "title.required" => "タイトルは必ず入力してください。",
            "title.max" => "タイトルは255文字以内で入力してください。",
            "explanation.required" => "説明は必ず入力してください。",
            "explanation.max" => "説明は1000文字以内で入力してください。",
        ];
    }
}
