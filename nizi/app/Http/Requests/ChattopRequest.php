<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChattopRequest extends FormRequest
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
            'subject' => 'required|max:80',
            'text' => 'required|max:350',
        ];
    }
 
    /**
     * エラーメッセージを日本語化
     * 
     */
    public function messages()
    {
        return [
            'subject.required' => '件名を入力してください',
            'subject.max' => '件名は80文字以内で入力してください',
            'text.required' => 'メッセージを入力してください',
            'text.max' => 'メッセージは350文字以内で入力してください',
        ];
    }
}
