<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatpost extends Model
{
    //
    /**
     * 
     */
    public function category()
    {
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo('App\Chattop');
    }
    // 割り当て許可
    protected $fillable = [
        'name',
        'message', 
        'chattop_id'
    ];
}
