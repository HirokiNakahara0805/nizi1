<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
 
class Post extends Model
{
    /**
     * 
     */
    public function comments()
    {
        // 投稿は複数のコメントを持つ
        return $this->hasMany('App\Comment');
    }
 
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
        'category_id'
    ];
    
}