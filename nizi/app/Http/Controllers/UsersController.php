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
        $keyword_teacher = $request->teacher;
        $keyword_sex = $request->sex;
        $keyword_teacher_condition = $request->teacher_condition;
  
        if(!empty($keyword_name) && empty($keyword_teacher) && empty($keyword_teacher_condition)) {
        $query = Category::query();
        $users = $query->where('name','like', '%' .$keyword_name. '%')->get();
        $message = "「". $keyword_name."」を含む名前の検索が完了しました。";
        return view('serch.serch')->with([
          'users' => $users,
          'message' => $message,
        ]);
      }
  
      elseif(empty($keyword_name) && !empty($keyword_teacher) && $keyword_teacher_condition == 0){
            $message = "年齢の条件を選択してください";
            return view('serch.serch')->with([
              'message' => $message,
            ]);
      }
      elseif(empty($keyword_name) && !empty($keyword_teacher) && $keyword_teacher_condition == 1){
        $query = Category::query();
        $users = $query->where('teacher','>=', $keyword_teacher)->get();
        $message = $keyword_teacher. "歳以上の検索が完了しました";
        return view('serch.serch')->with([
          'users' => $users,
          'message' => $message,
        ]);
      }
      elseif(empty($keyword_name) && !empty($keyword_teacher) && $keyword_teacher_condition == 2){
        $query = Category::query();
        $users = $query->where('teacher','<=', $keyword_teacher)->get();
        $message = $keyword_teacher. "歳以下の検索が完了しました";
        return view('serch.serch')->with([
          'users' => $users,
          'message' => $message,
        ]);
      }
      elseif(!empty($keyword_name) && !empty($keyword_teacher) && $keyword_teacher_condition == 1){
        $query = Category::query();
        $users = $query->where('name','like', '%' .$keyword_name. '%')->where('teacher','>=', $keyword_teacher)->get();
        $message = "「".$keyword_name . "」を含む名前と". $keyword_teacher. "歳以上の検索が完了しました";
        return view('serch.serch')->with([
          'users' => $users,
          'message' => $message,
        ]);
      }
      elseif(!empty($keyword_name) && !empty($keyword_teacher) && $keyword_teacher_condition == 2){
        $query = Category::query();
        $users = $query->where('name','like', '%' .$keyword_name. '%')->where('teacher','<=', $keyword_teacher)->get();
        $message = "「".$keyword_name . "」を含む名前と". $keyword_teacher. "歳以下の検索が完了しました";
        return view('serch.serch')->with([
          'users' => $users,
          'message' => $message,
        ]);
      }
      elseif(empty($keyword_name) && empty($keyword_teacher) && $keyword_sex == 1){
        $query = Category::query();
        $users = $query->where('sex','男')->get();
        $message = "男性の検索が完了しました";
              return view('serch.serch')->with([
                'users' => $users,
                'message' => $message,
              ]);
      }
      elseif(empty($keyword_name) && empty($keyword_teacher) && $keyword_sex == 2){
        $query = Category::query();
        $users = $query->where('sex','女')->get();
        $message = "女性の検索が完了しました";
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
