<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Category;
use App\Departmentpost;
class DepartmenttopController extends Controller{
   public function index(){


    $departmentposts = Departmentpost::orderBy('created_at', 'desc')->get();


    $categorymo1s=Category::where('time','like','%月1%')->get();
    $categorymo2s=Category::where('time','like','%月2%')->get();
    $categorymo3s=Category::where('time','like','%月3%')->get();
    $categorymo4s=Category::where('time','like','%月4%')->get();
    $categorymo5s=Category::where('time','like','%月5%')->get();

    $categorytu1s=Category::where('time','like','%火1%')->get();
    $categorytu2s=Category::where('time','like','%火2%')->get();
    $categorytu3s=Category::where('time','like','%火3%')->get();
    $categorytu4s=Category::where('time','like','%火4%')->get();
    $categorytu5s=Category::where('time','like','%火5%')->get();

    $categorywe1s=Category::where('time','like','%水1%')->get();
    $categorywe2s=Category::where('time','like','%水2%')->get();
    $categorywe3s=Category::where('time','like','%水3%')->get();
    $categorywe4s=Category::where('time','like','%水4%')->get();
    $categorywe5s=Category::where('time','like','%水5%')->get();

    $categoryth1s=Category::where('time','like','%木1%')->get();
    $categoryth2s=Category::where('time','like','%木2%')->get();
    $categoryth3s=Category::where('time','like','%木3%')->get();
    $categoryth4s=Category::where('time','like','%木4%')->get();
    $categoryth5s=Category::where('time','like','%木5%')->get();

    $categoryfr1s=Category::where('time','like','%金1%')->get();
    $categoryfr2s=Category::where('time','like','%金2%')->get();
    $categoryfr3s=Category::where('time','like','%金3%')->get();
    $categoryfr4s=Category::where('time','like','%金4%')->get();
    $categoryfr5s=Category::where('time','like','%金5%')->get();
    $categoryfr6s=Category::where('time','like','%金6%')->get();

       return view('departmenttop.index', [

        'departmentposts' => $departmentposts,


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

        'categoryfr1s' => $categoryfr1s,
        'categoryfr2s' => $categoryfr2s,
        'categoryfr3s' => $categoryfr3s,
        'categoryfr4s' => $categoryfr4s,
        'categoryfr5s' => $categoryfr5s,
        'categoryfr6s' => $categoryfr6s,
        

    ]);
	}
	
}