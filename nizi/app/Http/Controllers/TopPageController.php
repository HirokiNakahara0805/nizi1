<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use  App\Category; 

class TopPageController extends Controller {

    public function index()
    {
        // カテゴリ取得
        $category = new Category;
        $categories = $category->getLists();
     
    
        return view('top.index', [

            'categories' => $categories, 

        ]);
    }
	
}