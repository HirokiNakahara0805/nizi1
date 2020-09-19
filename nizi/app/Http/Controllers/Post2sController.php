<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post2,App\Category;// ←★忘れず追記
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

        //下の授業一覧
        $categorymo1s=Category::where('time','like','%月1%')->get();
        $categorymo2s=Category::where('time','like','%月2%')->get();
        $categorymo3s=Category::where('time','like','%月3%')->get();
        $categorymo4s=Category::where('time','like','%月4%')->get();
        $categorymo5s=Category::where('time','like','%月5%')->get();
    
        $categorytu1s=Category::where('time','like','%火1%')->get();
        $categorytu2s=Category::where('time','like','%火2%')->get();
        $categorytu3s=Category::where('time','like','%火3%')->get();
        $categorytu4s=Category::where('time','like','%火4%')->get();
        $categorytu5s=Category::where('time','like','%火5%')->get();
    
        $categorywe1s=Category::where('time','like','%水1%')->get();
        $categorywe2s=Category::where('time','like','%水2%')->get();
        $categorywe3s=Category::where('time','like','%水3%')->get();
        $categorywe4s=Category::where('time','like','%水4%')->get();
        $categorywe5s=Category::where('time','like','%水5%')->get();
    
        $categoryth1s=Category::where('time','like','%木1%')->get();
        $categoryth2s=Category::where('time','like','%木2%')->get();
        $categoryth3s=Category::where('time','like','%木3%')->get();
        $categoryth4s=Category::where('time','like','%木4%')->get();
        $categoryth5s=Category::where('time','like','%木5%')->get();
    
        $categoryfr1s=Category::where('time','like','%金1%')->get();
        $categoryfr2s=Category::where('time','like','%金2%')->get();
        $categoryfr3s=Category::where('time','like','%金3%')->get();
        $categoryfr4s=Category::where('time','like','%金4%')->get();
        $categoryfr5s=Category::where('time','like','%金5%')->get();
        $categoryfr6s=Category::where('time','like','%金6%')->get();
        
        
    
        return view('evaluation.index', [
            'post2s' => $post2s, 
            'categories' => $categories, 
            'category_id'=>$category_id,
            'goodpost2s' => $goodpost2s,
            'category2s'=>$category2s,

            'categorymo1s' => $categorymo1s,
        'categorymo2s' => $categorymo2s,
        'categorymo3s' => $categorymo3s,
        'categorymo4s' => $categorymo4s,
        'categorymo5s' => $categorymo5s,

        'categorytu1s' => $categorytu1s,
        'categorytu2s' => $categorytu2s,
        'categorytu3s' => $categorytu3s,
        'categorytu4s' => $categorytu4s,
        'categorytu5s' => $categorytu5s,

        'categorywe1s' => $categorywe1s,
        'categorywe2s' => $categorywe2s,
        'categorywe3s' => $categorywe3s,
        'categorywe4s' => $categorywe4s,
        'categorywe5s' => $categorywe5s,

        'categoryth1s' => $categoryth1s,
        'categoryth2s' => $categoryth2s,
        'categoryth3s' => $categoryth3s,
        'categoryth4s' => $categoryth4s,
        'categoryth5s' => $categoryth5s,

        'categoryfr1s' => $categoryfr1s,
        'categoryfr2s' => $categoryfr2s,
        'categoryfr3s' => $categoryfr3s,
        'categoryfr4s' => $categoryfr4s,
        'categoryfr5s' => $categoryfr5s,
        'categoryfr6s' => $categoryfr6s,
            
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
