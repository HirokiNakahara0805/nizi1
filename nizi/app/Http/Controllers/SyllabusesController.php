<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Syllabus; // ←★忘れず追記

class SyllabusesController extends Controller
{
    public function index()
    {
        $syllabuses = Syllabus::orderBy('created_at', 'desc')->get();
        return view('syllabus.index', ['syllabuses' => $syllabuses]);
    }
}
