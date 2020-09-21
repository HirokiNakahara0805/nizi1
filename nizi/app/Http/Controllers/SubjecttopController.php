<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category,App\Post2,App\Post,App\Departmentcategory;

class SubjecttopController extends Controller
{
    public function index(Request $request)
{
    // カテゴリ取得
    $category = new Category;
    $categories = $category->getLists();
 
    $category_id = $request->category_id;
    if (!is_null($category_id)) {
        $subjecttops = Category::where('id', $category_id)->orderBy('created_at', 'desc')->paginate(10);
    } else {
        $subjecttops = Category::orderBy('created_at', 'desc')->paginate(10);
    }
    //評価投稿をカテゴリーごとにランダムで採取
    $evaluations=Post2::where('category_id',$category_id)
                    ->inRandomOrder()->get();
    //掲示板投稿をカテゴリーごとに最新で採取
    $bbss=Post::where('category_id',$category_id)
                    ->orderBy('created_at', 'desc')->get();
    //カテゴリーネームを取得するときに使うもの
    $category2s=Category::where('id',$category_id)->get();
    //いいね平均について
    $goodpost2s = Post2::where('category_id',$category_id)->get();
    if (!is_null($category_id)) {
        $post2s = Post2::where('category_id', $category_id)->orderBy('created_at', 'desc')->paginate(10);
    } else {
        $post2s = Post2::orderBy('created_at', 'desc')->paginate(10);
    }

    

    //下の科目名一覧
    $departmentcategory_id = $request->departmentcategory_id;
    $categorydepas=Category::where('departmentcategory_id',$departmentcategory_id)->get();

    //デパートメントidの学部名とりだし
    $departmentcategories=Departmentcategory::where('id',$departmentcategory_id)->get();


   

    return view('subjecttop.index', [
        'subjecttops' => $subjecttops, 
        'categories' => $categories, 
        'category_id'=>$category_id,
        'evaluations'=>$evaluations,
        'bbss'=>$bbss,
        'category2s'=>$category2s,
        'goodpost2s' => $goodpost2s,
        'post2s' => $post2s,
        
        'categorydepas' => $categorydepas,
        'departmentcategory_id'=>$departmentcategory_id,
        'departmentcategories'=>$departmentcategories,
        


    ]);
}
}
