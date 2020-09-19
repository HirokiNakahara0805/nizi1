<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departmentpost extends Model
{
    //
    public function departmentcategory()
    {
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo('App\Departmentcategory');
    }

    // 割り当て許可
    protected $fillable = [
        'name',
        'message', 
        'departmentcategory_id'
    ];

    public function getLists()
    {
    $departmentcategories = Departmentcategory::orderBy('id','asc')->pluck('name', 'id');
 
    return $departmentcategories;
    }   
}
