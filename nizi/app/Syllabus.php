<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    /**
     * 
     */
    public function category()
    {
        // シラバスは1つのカテゴリーに属する
        return $this->belongsTo('App\Category');
    }
}
