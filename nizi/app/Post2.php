<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post2 extends Model
{
    //コメントはもたない
    
    /**
     * 
     */
    public function category()
    {
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo('App\Category');
    }

    
        // 割り当て許可
           protected $fillable = [
               'name',
               'year',
               'message', 
               'category_id',
               'good',
               'difficulty',
               'report',
               'test',
            

           ];
        
}