<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post2; // ←★忘れず追記
use App\Http\Requests\Post2Request; // class宣言の外に追記

class Post2sController extends Controller
{
    public function index()
    {
        $post2s = Post2::orderBy('created_at', 'desc')->paginate(10);
        return view('evaluation.index', ['post2s' => $post2s]);

       
        
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
            'atmosphere' => $request->atmosphere,
            'busyness' => $request->busyness,
        ];
    
        $post2 = new Post2;
        $post2->fill($savedata)->save();
    
        return redirect('/evaluation')->with('poststatus', '新規投稿しました');
    }
}
