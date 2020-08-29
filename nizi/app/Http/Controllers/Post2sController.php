<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post2; // ←★忘れず追記

class Post2sController extends Controller
{
    public function index()
    {
        $post2s = Post2::orderBy('created_at', 'desc')->paginate(10);
        return view('evaluation.index', ['post2s' => $post2s]);

       
        
    }
}
