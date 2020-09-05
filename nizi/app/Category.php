<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
 
class Category extends Model
{
    /**
     * 
     */
    public function posts()
    {
        // カテゴリは複数のポストを持つ
        return $this->hasMany('App\Post');
    }
       //カテゴリーの一覧を取得
    public function getLists()
    {
    $categories = Category::orderBy('id','asc')->pluck('name', 'id');
 
    return $categories;
    }

    public function post2s()
    {
        // カテゴリは複数のポスト2を持つ
        return $this->hasMany('App\Post2');
    }

    public function syllabi()
    {
        // カテゴリは複数のシラバスを持つ
        return $this->hasMany('App\Syllabus');
    }

    public function generaltops()
    {
        // カテゴリは複数のポストを持つ
        return $this->hasMany('App\Post');
    }
}
