<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class GeneraltopController extends Controller
{
    public function index(Request $request)
    {
        // カテゴリ取得
    $category = new Category;
    $categories = $category->getLists();
    $category_id = $request->category_id;

        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('generaltop.index', [
            
            'categories' => $categories,
            'category_id'=>$category_id
        ]);
    }
}
