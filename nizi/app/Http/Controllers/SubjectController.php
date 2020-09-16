<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Category;
class SubjectController extends Controller{
   public function index(){

    $categorymo1s=Category::where('time','月1')->get();
    $categorymo2s=Category::where('time','月2')->get();
    $categorymo3s=Category::where('time','月3')->get();
    $categorymo4s=Category::where('time','月4')->get();
    $categorymo5s=Category::where('time','月5')->get();

    $categorytu1s=Category::where('time','火1')->get();
    $categorytu2s=Category::where('time','火2')->get();
    $categorytu3s=Category::where('time','火3')->get();
    $categorytu4s=Category::where('time','火4')->get();
    $categorytu5s=Category::where('time','火5')->get();

    $categorywe1s=Category::where('time','水1')->get();
    $categorywe2s=Category::where('time','水2')->get();
    $categorywe3s=Category::where('time','水3')->get();
    $categorywe4s=Category::where('time','水4')->get();
    $categorywe5s=Category::where('time','水5')->get();

    $categoryth1s=Category::where('time','木1')->get();
    $categoryth2s=Category::where('time','木2')->get();
    $categoryth3s=Category::where('time','木3')->get();
    $categoryth4s=Category::where('time','木4')->get();
    $categoryth5s=Category::where('time','木5')->get();

    $categoryfr1s=Category::where('time','金1')->get();
    $categoryfr2s=Category::where('time','金2')->get();
    $categoryfr3s=Category::where('time','金3')->get();
    $categoryfr4s=Category::where('time','金4')->get();
    $categoryfr5s=Category::where('time','金5')->get();
    $categoryfr6s=Category::where('time','金6')->get();

       return view('subject.index', [

        'categorymo1s' => $categorymo1s,
        'categorymo2s' => $categorymo2s,
        'categorymo3s' => $categorymo3s,
        'categorymo4s' => $categorymo4s,
        'categorymo5s' => $categorymo5s,

        'categorytu1s' => $categorytu1s,
        'categorytu2s' => $categorytu2s,
        'categorytu3s' => $categorytu3s,
        'categorytu4s' => $categorytu4s,
        'categorytu5s' => $categorytu5s,

        'categorywe1s' => $categorywe1s,
        'categorywe2s' => $categorywe2s,
        'categorywe3s' => $categorywe3s,
        'categorywe4s' => $categorywe4s,
        'categorywe5s' => $categorywe5s,

        'categoryth1s' => $categoryth1s,
        'categoryth2s' => $categoryth2s,
        'categoryth3s' => $categoryth3s,
        'categoryth4s' => $categoryth4s,
        'categoryth5s' => $categoryth5s,

        'categorytfr1' => $categoryfr1s,
        'categorytfr2' => $categoryfr2s,
        'categorytfr3' => $categoryfr3s,
        'categorytfr4' => $categoryfr4s,
        'categorytfr5' => $categoryfr5s,
        'categorytfr6' => $categoryfr6s,
        

    ]);
	}
	
}