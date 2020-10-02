<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chatpost,App\Chattop; // ←★忘れず追記
use App\Http\Requests\ChatpostRequest; // class宣言の外に追記

class ChatpostsController extends Controller
{
    //
    public function index(Request $request)
    {
        // カテゴリ取得
        $chattop = new Chattop;
    
        $chattop_id = $request->chattop_id;
        if (!is_null($chattop_id)) {
            $chatposts = Chatpost::where('chattop_id', $chattop_id)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $chatposts = Chatpost::orderBy('created_at', 'desc')->paginate(10);
        }
    
        return view('chatpost.index', [
            'chatposts' => $chatposts, 
            'chattop_id'=>$chattop_id
        ]);
    }

    public function store(ChatpostRequest $request)
    {
        $savedata = [
            'name' => $request->name,
            'message' => $request->message,
            'chattop_id' => $request->chattop_id,
        ];
    
        $chatpost = new Chatpost;
        $chatpost->fill($savedata)->save();
    
        return redirect('/chatpost')->with('poststatus', '新規投稿しました');
    }
}
