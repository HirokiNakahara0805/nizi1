<?php
 
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class PostRequest extends FormRequest
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
            'name' => 'required|max:40',
            'year' =>  'required|integer|numeric|min:1|max:4',
            'message' => 'required|max:350',
            'category_id' => 'required|integer',
        ];
    }
 
    /**
     * エラーメッセージを日本語化
     * 
     */
    public function messages()
    {
        return [
            'name.required' => 'ニックネームを入力してください',
            'name.max' => 'ニックネームは40文字以内で入力してください',
            'year.required' => '学年を半角数字で入力してください',
            'year.min' => '学年は1～4の数字を半角で入力してください',
            'year.max' => '学年は1～4の数字を半角で入力してください',
            'year.integer' => '学年は1～4の数字を半角で入力してください',
            'message.required' => 'メッセージを入力してください',
            'message.max' => 'メッセージは350文字以内で入力してください',
            'category_id.required' => 'カテゴリーを選択してください',
            'category_id.integer' => 'カテゴリーの入力形式が不正です',
        ];
    }
}