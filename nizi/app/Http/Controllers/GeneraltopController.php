<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Generaltop,App\Category,App\Post2;

class GeneraltopController extends Controller
{
    public function index(Request $request)
{
    // カテゴリ取得
    $category = new Category;
    $categories = $category->getLists();
 
    $category_id = $request->category_id;
    if (!is_null($category_id)) {
        $generaltops = Generaltop::where('category_id', $category_id)->orderBy('created_at', 'desc')->paginate(10);
    } else {
        $generaltops = Generaltop::orderBy('created_at', 'desc')->paginate(10);
    }

    $evaluations=Post2::where('category_id',$category_id)
                    ->inRandomOrder()->get();

                    
    return view('generaltop.index', [
        'generaltops' => $generaltops, 
        'categories' => $categories, 
        'category_id'=>$category_id,
        'evaluations'=>$evaluations
    ]);
}
}
