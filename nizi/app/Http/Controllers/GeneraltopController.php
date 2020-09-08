<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Generaltop,App\Category,App\Post2,App\Post;

class GeneraltopController extends Controller
{
    public function index(Request $request)
{
    // カテゴリ取得
    $category = new Category;
    $categories = $category->getLists();
 
    $category_id = $request->category_id;
    if (!is_null($category_id)) {
        $generaltops = Category::where('id', $category_id)->orderBy('created_at', 'desc')->paginate(10);
    } else {
        $generaltops = Category::orderBy('created_at', 'desc')->paginate(10);
    }
    //評価投稿をカテゴリーごとにランダムで採取
    $evaluations=Post2::where('category_id',$category_id)
                    ->inRandomOrder()->get();
    //掲示板投稿をカテゴリーごとに最新で採取
    $bbss=Post::where('category_id',$category_id)
                    ->orderBy('created_at', 'desc')->get();
    //カテゴリーネームを取得するときに使うもの
    $category2s=Category::where('id',$category_id)->get();

    return view('generaltop.index', [
        'generaltops' => $generaltops, 
        'categories' => $categories, 
        'category_id'=>$category_id,
        'evaluations'=>$evaluations,
        'bbss'=>$bbss,
        'category2s'=>$category2s

    ]);
}
}
