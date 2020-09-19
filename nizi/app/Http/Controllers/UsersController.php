<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class UsersController extends Controller
{
    //
    public function index() {
        $users = Category::all();
        return view('serch.index')->with('users', $users);
      }

      public function serch(Request $request) {
        $keyword_name = $request->name;
   
        
  
        if(!empty($keyword_name)) {
        $query = Category::query();
        $users = $query->where('name','like', '%' .$keyword_name. '%')->get();
        $message = "「". $keyword_name."」を含む名前の検索が完了しました。";
        return view('serch.serch')->with([
          'users' => $users,
          'message' => $message,
        ]);
      }
      else {
        $message = "検索結果はありません。";
        return view('serch.serch')->with('message',$message);
        }
  }

    
}
