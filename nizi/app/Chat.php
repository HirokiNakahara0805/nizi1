<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $fillable = [
        'name',
        'message', 
    ];

    public function chatposts()
    {
        // カテゴリは複数のポストを持つ
        return $this->hasMany('App\Chatpost');
    }

    public function getLists()
{
    $chats = Chat::orderBy('id','asc')->pluck('name', 'id');
 
    return $chats;
}
}
