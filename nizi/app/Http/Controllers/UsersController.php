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
        $keyword_departmentcategory_id = $request->departmentcategory_id;
   
        
  //科目名のみ入力
        if(!empty($keyword_name) && empty($keyword_teacher) && empty($keyword_departmentcategory_id)){
        $query = Category::query();
        $users = $query->where('name','like', '%' .$keyword_name. '%')->get();
        $message = "「". $keyword_name."」を含む科目の検索が完了しました。";
        return view('serch.serch')->with([
          'users' => $users,
          'message' => $message,
        ]);
        }

    //教授名のみ入力

        elseif(empty($keyword_name) && !empty($keyword_teacher) && empty($keyword_departmentcategory_id)) {
            $query = Category::query();
            $users = $query->where('teacher','like', '%' .$keyword_teacher. '%')->get();
            $message = "「". $keyword_teacher."」を含む教授の検索が完了しました。";
            return view('serch.serch')->with([
              'users' => $users,
              'message' => $message,
            ]);
            }

    //学部名のみ検索    
        elseif(empty($keyword_name) && empty($keyword_teacher) && !empty($keyword_departmentcategory_id)) {
            $query = Category::query();
            $users = $query->where('departmentcategory_id',$keyword_departmentcategory_id)->get();
            $message = "「". $keyword_departmentcategory_id."」を含む学部の検索が完了しました。";
            return view('serch.serch')->with([
                  'users' => $users,
                  'message' => $message,
                ]);
                }
    //科目名且つ教授名
                elseif(!empty($keyword_name) && !empty($keyword_teacher) && empty($keyword_departmentcategory_id)) {
                    $query = Category::query();
                    $users = $query->where('name','like', '%' .$keyword_name. '%')->where('teacher','like', '%' .$keyword_teacher. '%')->get();
                    $message = "「". $keyword_name."」を含む科目名、且つ「". $keyword_teacher."」を含む教授名の検索が完了しました。";
                    return view('serch.serch')->with([
                      'users' => $users,
                      'message' => $message,
                    ]);
                    }
    //科目名且つ学部名
                elseif(!empty($keyword_name) && empty($keyword_teacher) && !empty($keyword_departmentcategory_id)) {
                    $query = Category::query();
                    $users = $query->where('name','like', '%' .$keyword_name. '%')->where('departmentcategory_id','like', '%' .$keyword_departmentcategory_id. '%')->get();
                    $message = "「". $keyword_name."」を含む科目名、且つ「". $keyword_departmentcategory_id."」を含む学部名の検索が完了しました。";
                    return view('serch.serch')->with([
                        'users' => $users,
                        'message' => $message,
                      ]);
                    }
    //教授名且つ学部名
                elseif(empty($keyword_name) && !empty($keyword_teacher) && !empty($keyword_departmentcategory_id)) {
                    $query = Category::query();
                    $users = $query->where('teacher','like', '%' .$keyword_teacher. '%')->where('departmentcategory_id','like', '%' .$keyword_departmentcategory_id. '%')->get();
                    $message = "「". $keyword_name."」を含む教授名、且つ「". $keyword_departmentcategory_id."」を含む学部名の検索が完了しました。";        
                        
                        return view('serch.serch')->with([
                          'users' => $users,
                          'message' => $message,
                        ]);
                        }

    //科目名且つ教授名且つ学部名
                elseif(!empty($keyword_name) && !empty($keyword_teacher) && !empty($keyword_departmentcategory_id)) {
                    $query = Category::query();
                    $users = $query->where('name','like', '%' .$keyword_name. '%')->where('teacher','like', '%' .$keyword_teacher. '%')->where('departmentcategory_id','like', '%' .$keyword_departmentcategory_id. '%')->get();
                    $message = "「". $keyword_name."」を含む科目名、且つ「". $keyword_name."」を含む教授名、且つ「". $keyword_departmentcategory_id."」を含む学部名の検索が完了しました。";        
                                
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
