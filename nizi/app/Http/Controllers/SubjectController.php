<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Category;
class SubjectController extends Controller{
   public function index(){

    $categorym1s=Category::where('time','月1')->get();
    $categoryt2s=Category::where('time','火2')->get();

       return view('subject.index', [

        'categorym1s' => $categorym1s,
        'categoryt2s' => $categoryt2s
        

    ]);
	}
	
}