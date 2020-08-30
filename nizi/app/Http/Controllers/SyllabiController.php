<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Syllabus; // ←★忘れず追記

class SyllabiController extends Controller
{
    public function index()
    {
        $syllabi = Syllabus::orderBy('created_at', 'desc')->get();
        return view('syllabus.index', ['syllabi' => $syllabi]);
    }
}
