<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ChatpostRequest; 
use App\Chatpost, App\Chat;

class ChatpostsController extends Controller
{
    //
    public function index()
    {
        $chatposts = Chatpost::orderBy('created_at', 'desc')->paginate(10);
        return view('chatpost.index', ['chatposts' => $chatposts]);
    }

    public function create()
    {
        $chat = new Chat;
        $chats = $chat->getLists()->prepend('選択', '');

    return view('chatposts.index');
    }
 
 
/**
 * バリデーション、登録データの整形など
 */
    public function store(ChatpostRequest $request)
    {
    $savedata = [
        'name' => $request->name,
        'message' => $request->message,
        'chat_id' => $request->chat_id,
    ];
 
    $chatposts = new Chatpost;
    $chatposts->fill($savedata)->save();
 
    return redirect('/chatpost')->with('chatpoststatus', '新規投稿しました');
}
}
