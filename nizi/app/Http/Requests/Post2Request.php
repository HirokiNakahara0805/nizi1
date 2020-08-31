<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Post2Request extends FormRequest
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
            'year' => 'required|integer|numeric|min:1|max:4',
            'message' => 'required|max:500',
            'category_id' => 'required|integer',
            'good' => 'required|integer|numeric|min:1|max:5',
            'difficulty' => 'required|integer|numeric|min:1|max:5',
            'busyness' => 'required|integer|numeric|min:1|max:5',
            'atmosphere' => 'required|integer|numeric|min:1|max:5',

            //
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
            'name.max' => '名前は40文字以内で入力してください',
            'year.required' => '学年を半角数字で入力してください',
            'year.min' => '学年は1～4の数字を半角で入力してください',
            'year.max' => '学年は1～4の数字を半角で入力してください',
            'year.integer' => '学年は1～4の数字を半角で入力してください',
            'message.required' => 'コメントを入力してください',
            'message.max' => 'コメントは500文字以内で入力してください',
            'category_id.required' => 'カテゴリーを選択してください',
            'category_id.integer' => 'カテゴリーの入力形式が不正です',
            'good.required' => 'いいね数を半角数字で入力してください',
            'good.min' => 'いいね数は1～5の数字を半角で入力してください',
            'good.max' => 'いいね数は1～5の数字を半角で入力してください',
            'good.integer' => 'いいね数は1～5の数字を半角で入力してください',
            'difficulty.required' => '単位取得難易度を半角数字で入力してください',
            'difficulty.min' => '単位取得難易度は1～5の数字を半角で入力してください',
            'difficulty.max' => '単位取得難易度は1～5の数字を半角で入力してください',
            'difficulty.integer' => '単位取得難易度は1～5の数字を半角で入力してください',
            'busyness.required' => '忙しさを半角数字で入力してください',
            'busyness.min' => '忙しさは1～5の数字を半角で入力してください',
            'busyness.max' => '忙しさは1～5の数字を半角で入力してください',
            'busyness.integer' => '忙しさは1～5の数字を半角で入力してください',
            'atmosphere.required' => '雰囲気を半角数字で入力してください',
            'atmosphere.min' => '雰囲気は1～5の数字を半角で入力してください',
            'atmosphere.max' => '雰囲気は1～5の数字を半角で入力してください',
            'atmosphere.integer' => '雰囲気は1～5の数字を半角で入力してください',
        ];
    }


}
