<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use  App\Category; 



class TopPageController extends Controller {

    public function index()
    {
        // カテゴリ全取得
        $category = new Category;
        $categories = $category->getLists();
        

        //カテゴリー
        $category2s=Category::get();
     
    
        return view('top.index', [

            'categories' => $categories, 
            'category2s'=>$category2s

        ]);
    }
	
}