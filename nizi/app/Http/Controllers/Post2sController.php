<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post2,App\Category,App\Departmentcategory;// ←★忘れず追記
use App\Http\Requests\Post2Request; // class宣言の外に追記

class Post2sController extends Controller
{
        public function index(Request $request)
    {
        


        // カテゴリ取得
        $category = new Category;
        $categories = $category->getLists();
    
        $category_id = $request->category_id;
        if (!is_null($category_id)) {
            $post2s = Post2::where('category_id', $category_id)->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $post2s = Post2::orderBy('created_at', 'desc')->paginate(6);
        }

        
        
        //いいね平均について
        $goodpost2s = Post2::where('category_id',$category_id)->get();

        //カテゴリーネームを取得するときに使うもの
        $category2s=Category::where('id',$category_id)->get();

        //下の科目名一覧
        $departmentcategory_id = $request->departmentcategory_id;
        $categorydepas=Category::where('departmentcategory_id',$departmentcategory_id)->get();
        //デパートメントidの学部名とりだし
        $departmentcategories=Departmentcategory::where('id',$departmentcategory_id)->get();
        
        
    
        return view('evaluation.index', [
            'post2s' => $post2s, 
            'categories' => $categories, 
            'category_id'=>$category_id,
            'goodpost2s' => $goodpost2s,
            'category2s'=>$category2s,

            'categorydepas' => $categorydepas,
            'departmentcategory_id'=>$departmentcategory_id,
            'departmentcategories'=>$departmentcategories,
            
        ]);
    }

        /**
     * 投稿フォーム
     */
    public function create()
    {
    return view('post2s.create');
    }
    
    
    /**
     * バリデーション、登録データの整形など
     */
    public function store(Post2Request $request)
    {
        $savedata = [
            'name' => $request->name,
            'year' => $request->year,
            'message' => $request->message,
            'category_id' => $request->category_id,
            'good' => $request->good,
            'difficulty' => $request->difficulty,
            'report' => $request->report,
            'test' => $request->test,
            
        ];
    
        $post2 = new Post2;
        $post2->fill($savedata)->save();
    
        return back()->with('poststatus', '新規投稿しました');
    }
}
