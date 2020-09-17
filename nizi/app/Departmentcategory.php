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

    public function getLists()
    {
        $departmentcategories = Departmentcategory::orderBy('id','asc')->pluck('name', 'id');
    
        return $departmentcategories;
    }
}
