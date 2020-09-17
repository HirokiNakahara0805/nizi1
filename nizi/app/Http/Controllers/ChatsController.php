<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ChatRequest;
use App\Chat;

class ChatsController extends Controller
{
    //
    public function index()
    {
        $chats = Chat::orderBy('created_at', 'desc')->get();
        return view('chat.index', ['chats' => $chats]);
    }

    public function create()
    {
    return view('chat.index');
    }

    public function store(ChatRequest $request)
    {
        $savedata = [
            'name' => $request->name,
            
            'message' => $request->message,
        ];
    
        $chat = new Chat;
        $chat->fill($savedata)->save();
    
        return redirect('/chat')->with('chatstatus', '新規投稿しました');
    }
 
}
