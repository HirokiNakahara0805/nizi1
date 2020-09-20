<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Departmentcategory;

class UsersController extends Controller
{
    //
    public function index() {
        $users = Category::all();
        //学部とりだし
        $departmentcategories=Departmentcategory::get();
     

        return view('serch.index',['departmentcategories'=>$departmentcategories])->with('users', $users);
      }

      public function serch(Request $request) {
        $keyword_name = $request->name;
        $keyword_teacher = $request->teacher;
        $keyword_department = $request->department;
   
        
  //科目名のみ入力
        if(!empty($keyword_name) && empty($keyword_teacher) && empty($keyword_department)){
        $query = Category::query();
        $users = $query->where('name','like', '%' .$keyword_name. '%')->paginate(10);
        $message = "「". $keyword_name."」を含む科目の検索が完了しました。";
        return view('serch.serch')->with([
          'users' => $users,
          'message' => $message,
        ]);
        }

    //教授名のみ入力

        elseif(empty($keyword_name) && !empty($keyword_teacher) && empty($keyword_department)) {
            $query = Category::query();
            $users = $query->where('teacher','like', '%' .$keyword_teacher. '%')->paginate(10);
            $message = "「". $keyword_teacher."」を含む教授の検索が完了しました。";
            return view('serch.serch')->with([
              'users' => $users,
              'message' => $message,
            ]);
            }

    //学部名のみ検索    
        elseif(empty($keyword_name) && empty($keyword_teacher) && !empty($keyword_department)) {
            $query = Category::query();
            $users = $query->where('department','like', '%' .$keyword_department. '%')->paginate(25);
            $message = "「". $keyword_department."」の検索が完了しました。";
            return view('serch.serch')->with([
                  'users' => $users,
                  'message' => $message,
                ]);
                }
    //科目名且つ教授名
                elseif(!empty($keyword_name) && !empty($keyword_teacher) && empty($keyword_department)) {
                    $query = Category::query();
                    $users = $query->where('name','like', '%' .$keyword_name. '%')->where('teacher','like', '%' .$keyword_teacher. '%')->paginate(10);
                    $message = "「". $keyword_name."」を含む科目名、且つ「". $keyword_teacher."」を含む教授名の検索が完了しました。";
                    return view('serch.serch')->with([
                      'users' => $users,
                      'message' => $message,
                    ]);
                    }
    //科目名且つ学部名
                elseif(!empty($keyword_name) && empty($keyword_teacher) && !empty($keyword_department)) {
                    $query = Category::query();
                    $users = $query->where('name','like', '%' .$keyword_name. '%')->where('department','like', '%' .$keyword_department. '%')->paginate(10);
                    $message = "「". $keyword_name."」を含む科目名、且つ「". $keyword_department."」の検索が完了しました。";
                    return view('serch.serch')->with([
                        'users' => $users,
                        'message' => $message,
                      ]);
                    }
    //教授名且つ学部名
                elseif(empty($keyword_name) && !empty($keyword_teacher) && !empty($keyword_department)) {
                    $query = Category::query();
                    $users = $query->where('teacher','like', '%' .$keyword_teacher. '%')->where('department','like', '%' .$keyword_department. '%')->paginate(10);
                    $message = "「". $keyword_name."」を含む教授名、且つ「". $keyword_department."」の検索が完了しました。";        
                        
                        return view('serch.serch')->with([
                          'users' => $users,
                          'message' => $message,
                        ]);
                        }

    //科目名且つ教授名且つ学部名
                elseif(!empty($keyword_name) && !empty($keyword_teacher) && !empty($keyword_department)) {
                    $query = Category::query();
                    $users = $query->where('name','like', '%' .$keyword_name. '%')->where('teacher','like', '%' .$keyword_teacher. '%')->where('department','like', '%' .$keyword_department. '%')->paginate(10);
                    $message = "「". $keyword_name."」を含む科目名、且つ「". $keyword_name."」を含む教授名、且つ「". $keyword_department."」の検索が完了しました。";        
                                
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
