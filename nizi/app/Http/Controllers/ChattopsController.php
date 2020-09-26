<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chattop; // ←★忘れず追記
use App\Http\Requests\ChattopRequest; // class宣言の外に追記

class ChattopsController extends Controller
{
    //
    public function index()
    {
        $chattops = Chattop::orderBy('created_at', 'desc')->get();
        return view('chattop.index', ['chattops' => $chattops]);
    }

    public function store(ChattopRequest $request)
    {
        $savedata = [
            'subject' => $request->subject,
            'text' => $request->text,
        ];
    
        $chattop = new Chattop;
        $chattop->fill($savedata)->save();
    
        return redirect('/chattop')->with('poststatus', '新規投稿しました');
    }
}
