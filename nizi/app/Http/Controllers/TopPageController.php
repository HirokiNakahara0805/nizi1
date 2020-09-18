<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use  App\Category;
use App\Departmentcategory; 



class TopPageController extends Controller {

    public function index()
    {
        // カテゴリ全取得
        $category = new Category;
        $categories = $category->getLists();
        
        //評価投稿をカテゴリーごとにランダムで採取
        $category2s=Category::inRandomOrder()->get();

        //学部とりだし
        $departmentcategories=Departmentcategory::get();
     
    
        return view('top.index', [

            'categories' => $categories, 
            'category2s'=>$category2s,
            'departmentcategories'=>$departmentcategories
            

        ]);
    }
	
}