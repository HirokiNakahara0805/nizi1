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
            'name' => 'required|max:10|not_regex:"青姦"|not_regex:"アナル"|not_regex:"淫売"|not_regex:"ウンコ"|not_regex:"ウンチ"|not_regex:"オッパイ"|not_regex:"ガイジ"|not_regex:"外人"|not_regex:"ガキ"|not_regex:"クンニ"|not_regex:"クリトリス"|not_regex:"強姦"|not_regex:"殺す"|not_regex:"コロシ"|not_regex:"殺し"|not_regex:"黒人"|not_regex:"死ね"|not_regex:"シ"|not_regex:"障害者"|not_regex:"処女"|not_regex:"心障児"|not_regex:"心障者"|not_regex:"セックス"|not_regex:"精神異常"|not_regex:"精神分裂病"|not_regex:"精薄"|not_regex:"知恵遅れ"|not_regex:"痴呆症"|not_regex:"チョン"|not_regex:"チンコ"|not_regex:"チンポ"|not_regex:"低脳"|not_regex:"低脳児"|not_regex:"パイパン"|not_regex:"ブス"|not_regex:"部落"|not_regex:"浮浪児"|not_regex:"フェラ"|not_regex:"浮浪者"|not_regex:"レイプ"|not_regex:"マンコ"|not_regex:"ファック"|not_regex:"fuck"|not_regex:"あおかん"|not_regex:"あなる"|not_regex:"いんばい"|not_regex:"うんこ"|not_regex:"うんち"|not_regex:"おっぱい"|not_regex:"がいじ"|not_regex:"がいじん"|not_regex:"がき"|not_regex:"くんに"|not_regex:"くりとりす"|not_regex:"ごうかん"|not_regex:"ころす"|not_regex:"ころし"|not_regex:"ころし"|not_regex:"こくじん"|not_regex:"しね"|not_regex:"しね"|not_regex:"しょうがいしゃ"|not_regex:"しょじょ"|not_regex:"しんしょうじ"|not_regex:"しんしょうしゃ"|not_regex:"せっくす"|not_regex:"せいしんいじょう"|not_regex:"せいしんぶんれつびょう"|not_regex:"せいはく"|not_regex:"ちえおくれ"|not_regex:"ちほうしょう"|not_regex:"ちょん"|not_regex:"ちんこ"|not_regex:"ちんぽ"|not_regex:"ていのう"|not_regex:"ていのうじ"|not_regex:"ぱいぱん"|not_regex:"ぶす"|not_regex:"ぶらく"|not_regex:"ふろうじ"|not_regex:"ふぇら"|not_regex:"ふろうしゃ"|not_regex:"れいぷ"|not_regex:"まんこ"|not_regex:"ふぁっく"',
            
            'year' => 'required|integer|numeric|min:0|max:4',

            'message' => 'required|max:200|not_regex:"青姦"|not_regex:"アナル"|not_regex:"淫売"|not_regex:"ウンコ"|not_regex:"ウンチ"|not_regex:"オッパイ"|not_regex:"ガイジ"|not_regex:"外人"|not_regex:"ガキ"|not_regex:"クンニ"|not_regex:"クリトリス"|not_regex:"強姦"|not_regex:"殺す"|not_regex:"コロシ"|not_regex:"殺し"|not_regex:"黒人"|not_regex:"死ね"|not_regex:"シ"|not_regex:"障害者"|not_regex:"処女"|not_regex:"心障児"|not_regex:"心障者"|not_regex:"セックス"|not_regex:"精神異常"|not_regex:"精神分裂病"|not_regex:"精薄"|not_regex:"知恵遅れ"|not_regex:"痴呆症"|not_regex:"チョン"|not_regex:"チンコ"|not_regex:"チンポ"|not_regex:"低脳"|not_regex:"低脳児"|not_regex:"パイパン"|not_regex:"ブス"|not_regex:"部落"|not_regex:"浮浪児"|not_regex:"フェラ"|not_regex:"浮浪者"|not_regex:"レイプ"|not_regex:"マンコ"|not_regex:"ファック"|not_regex:"fuck"|not_regex:"あおかん"|not_regex:"あなる"|not_regex:"いんばい"|not_regex:"うんこ"|not_regex:"うんち"|not_regex:"おっぱい"|not_regex:"がいじ"|not_regex:"がいじん"|not_regex:"がき"|not_regex:"くんに"|not_regex:"くりとりす"|not_regex:"ごうかん"|not_regex:"ころす"|not_regex:"ころし"|not_regex:"ころし"|not_regex:"こくじん"|not_regex:"しね"|not_regex:"しね"|not_regex:"しょうがいしゃ"|not_regex:"しょじょ"|not_regex:"しんしょうじ"|not_regex:"しんしょうしゃ"|not_regex:"せっくす"|not_regex:"せいしんいじょう"|not_regex:"せいしんぶんれつびょう"|not_regex:"せいはく"|not_regex:"ちえおくれ"|not_regex:"ちほうしょう"|not_regex:"ちょん"|not_regex:"ちんこ"|not_regex:"ちんぽ"|not_regex:"ていのう"|not_regex:"ていのうじ"|not_regex:"ぱいぱん"|not_regex:"ぶす"|not_regex:"ぶらく"|not_regex:"ふろうじ"|not_regex:"ふぇら"|not_regex:"ふろうしゃ"|not_regex:"れいぷ"|not_regex:"まんこ"|not_regex:"ふぁっく"',

            'category_id' => 'required|integer',
            'good' => 'required|integer|numeric|min:1|max:5',
            'difficulty' => 'required|integer|numeric|min:1|max:5',

            'report' => 'required|max:200|not_regex:"青姦"|not_regex:"アナル"|not_regex:"淫売"|not_regex:"ウンコ"|not_regex:"ウンチ"|not_regex:"オッパイ"|not_regex:"ガイジ"|not_regex:"外人"|not_regex:"ガキ"|not_regex:"クンニ"|not_regex:"クリトリス"|not_regex:"強姦"|not_regex:"殺す"|not_regex:"コロシ"|not_regex:"殺し"|not_regex:"黒人"|not_regex:"死ね"|not_regex:"シ"|not_regex:"障害者"|not_regex:"処女"|not_regex:"心障児"|not_regex:"心障者"|not_regex:"セックス"|not_regex:"精神異常"|not_regex:"精神分裂病"|not_regex:"精薄"|not_regex:"知恵遅れ"|not_regex:"痴呆症"|not_regex:"チョン"|not_regex:"チンコ"|not_regex:"チンポ"|not_regex:"低脳"|not_regex:"低脳児"|not_regex:"パイパン"|not_regex:"ブス"|not_regex:"部落"|not_regex:"浮浪児"|not_regex:"フェラ"|not_regex:"浮浪者"|not_regex:"レイプ"|not_regex:"マンコ"|not_regex:"ファック"|not_regex:"fuck"|not_regex:"あおかん"|not_regex:"あなる"|not_regex:"いんばい"|not_regex:"うんこ"|not_regex:"うんち"|not_regex:"おっぱい"|not_regex:"がいじ"|not_regex:"がいじん"|not_regex:"がき"|not_regex:"くんに"|not_regex:"くりとりす"|not_regex:"ごうかん"|not_regex:"ころす"|not_regex:"ころし"|not_regex:"ころし"|not_regex:"こくじん"|not_regex:"しね"|not_regex:"しね"|not_regex:"しょうがいしゃ"|not_regex:"しょじょ"|not_regex:"しんしょうじ"|not_regex:"しんしょうしゃ"|not_regex:"せっくす"|not_regex:"せいしんいじょう"|not_regex:"せいしんぶんれつびょう"|not_regex:"せいはく"|not_regex:"ちえおくれ"|not_regex:"ちほうしょう"|not_regex:"ちょん"|not_regex:"ちんこ"|not_regex:"ちんぽ"|not_regex:"ていのう"|not_regex:"ていのうじ"|not_regex:"ぱいぱん"|not_regex:"ぶす"|not_regex:"ぶらく"|not_regex:"ふろうじ"|not_regex:"ふぇら"|not_regex:"ふろうしゃ"|not_regex:"れいぷ"|not_regex:"まんこ"|not_regex:"ふぁっく"',

            'test' => 'required|max:200|not_regex:"青姦"|not_regex:"アナル"|not_regex:"淫売"|not_regex:"ウンコ"|not_regex:"ウンチ"|not_regex:"オッパイ"|not_regex:"ガイジ"|not_regex:"外人"|not_regex:"ガキ"|not_regex:"クンニ"|not_regex:"クリトリス"|not_regex:"強姦"|not_regex:"殺す"|not_regex:"コロシ"|not_regex:"殺し"|not_regex:"黒人"|not_regex:"死ね"|not_regex:"シ"|not_regex:"障害者"|not_regex:"処女"|not_regex:"心障児"|not_regex:"心障者"|not_regex:"セックス"|not_regex:"精神異常"|not_regex:"精神分裂病"|not_regex:"精薄"|not_regex:"知恵遅れ"|not_regex:"痴呆症"|not_regex:"チョン"|not_regex:"チンコ"|not_regex:"チンポ"|not_regex:"低脳"|not_regex:"低脳児"|not_regex:"パイパン"|not_regex:"ブス"|not_regex:"部落"|not_regex:"浮浪児"|not_regex:"フェラ"|not_regex:"浮浪者"|not_regex:"レイプ"|not_regex:"マンコ"|not_regex:"ファック"|not_regex:"fuck"|not_regex:"あおかん"|not_regex:"あなる"|not_regex:"いんばい"|not_regex:"うんこ"|not_regex:"うんち"|not_regex:"おっぱい"|not_regex:"がいじ"|not_regex:"がいじん"|not_regex:"がき"|not_regex:"くんに"|not_regex:"くりとりす"|not_regex:"ごうかん"|not_regex:"ころす"|not_regex:"ころし"|not_regex:"ころし"|not_regex:"こくじん"|not_regex:"しね"|not_regex:"しね"|not_regex:"しょうがいしゃ"|not_regex:"しょじょ"|not_regex:"しんしょうじ"|not_regex:"しんしょうしゃ"|not_regex:"せっくす"|not_regex:"せいしんいじょう"|not_regex:"せいしんぶんれつびょう"|not_regex:"せいはく"|not_regex:"ちえおくれ"|not_regex:"ちほうしょう"|not_regex:"ちょん"|not_regex:"ちんこ"|not_regex:"ちんぽ"|not_regex:"ていのう"|not_regex:"ていのうじ"|not_regex:"ぱいぱん"|not_regex:"ぶす"|not_regex:"ぶらく"|not_regex:"ふろうじ"|not_regex:"ふぇら"|not_regex:"ふろうしゃ"|not_regex:"れいぷ"|not_regex:"まんこ"|not_regex:"ふぁっく"',

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
            'name.max' => 'ニックネームは10文字以内で入力してください',
            'name.not_regex' => '不正な文字が含まれています',

            'year.required' => '学年を入力してください',
            'year.min' => '学年は1～4の数字を半角で入力してください',
            'year.max' => '学年は1～4の数字を半角で入力してください',
            'year.integer' => '学年は1～4の数字を半角で入力してください',

            'message.required' => 'コメントを入力してください',
            'message.max' => 'コメントは200文字以内で入力してください',
            'message.not_regex' => '不正な文字が含まれています',

            'category_id.required' => 'カテゴリーを選択してください',
            'category_id.integer' => 'カテゴリーの入力形式が不正です',

            'good.required' => 'おすすめ度を入力してください',
            'good.min' => 'いいね数は1～5の数字を半角で入力してください',
            'good.max' => 'いいね数は1～5の数字を半角で入力してください',
            'good.integer' => 'いいね数は1～5の数字を半角で入力してください',

            'test.required' => 'テストについてを入力してください',
            'test.max' => 'テストについては200文字以内で入力してください',
            'test.not_regex' => '不正な文字が含まれています',

            'report.required' => 'レポートについてを入力してください',
            'report.max' => 'レポートについては200文字以内で入力してください',
            'report.not_regex' => '不正な文字が含まれています',

            'difficulty.required' => '難しさを半角数字で入力してください',
            'difficulty.min' => '難しさは1～5の数字を半角で入力してください',
            'difficulty.max' => '難しさは1～5の数字を半角で入力してください',
            'difficulty.integer' => '難しさは1～5の数字を半角で入力してください',
        ];
    }


}
