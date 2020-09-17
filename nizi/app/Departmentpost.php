<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departmentpost extends Model
{
    //
    public function departmentcategory()
    {
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo('App\DepartmentCategory');
    }
}
