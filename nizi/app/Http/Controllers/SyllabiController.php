<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Syllabus, App\Category;; // ←★忘れず追記

class SyllabiController extends Controller
{
    public function index(Request $request)
{
    // カテゴリ取得
    $category = new Category;
    $categories = $category->getLists();
 
    $category_id = $request->category_id;
    if (!is_null($category_id)) {
        $syllabi = Syllabus::where('category_id', $category_id)->orderBy('created_at', 'desc')->paginate(10);
    } else {
        $syllabi = Syllabus::orderBy('created_at', 'desc')->paginate(10);
    }
 
    return view('syllabus.index', [
        'syllabi' => $syllabi, 
        'categories' => $categories, 
        'category_id'=>$category_id
    ]);
}
}
