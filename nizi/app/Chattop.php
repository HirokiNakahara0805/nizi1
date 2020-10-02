<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chattop extends Model
{
    //
    public function posts()
    {
        // カテゴリは複数のポストを持つ
        return $this->hasMany('App\chatpost');
    }
    // 割り当て許可
    protected $fillable = [
        'subject',
        'text', 
    ];
}
