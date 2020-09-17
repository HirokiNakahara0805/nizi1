<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departmentcategory extends Model
{
    //
    public function departmentposts()
    {
        // カテゴリは複数のポストを持つ
        return $this->hasMany('App\Departmentpost');
    }
}
