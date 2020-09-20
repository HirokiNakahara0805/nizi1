<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatpost extends Model
{
    //
    public function chat()
    {
        // 投稿は1つのチャット属する
        return $this->belongsTo('App\Chat');
    }

    protected $fillable = [
        'name',
        'message',
        'chat_id'
    ];
}
