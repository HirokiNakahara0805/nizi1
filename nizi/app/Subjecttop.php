<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjecttop extends Model
{
    public function category()
    {
        // 般教TOPは1つのカテゴリーに属する
        return $this->belongsTo('App\Category');
    }
}
