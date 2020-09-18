<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Departmentpost;
use App\Departmentcategory;
use App\Http\Requests\DepartmentpostRequest;
class DepartmenttopController extends Controller{
   public function index(Request $request){


    // カテゴリ取得
    $departmentcategory = new Departmentcategory;
    $departmentcategories = $departmentcategory->getLists();
 
    $departmentcategory_id = $request->departmentcategory_id;
    if (!is_null($departmentcategory_id)) {
        $departmentposts = Departmentpost::where('departmentcategory_id', $departmentcategory_id)->orderBy('created_at', 'desc')->paginate(10);
    } else {
        $departmentposts = Departmentpost::orderBy('created_at', 'desc')->paginate(10);
    }

    //学部とりだし
    $departmentcategorie2s=Departmentcategory::get();
    //デパートメントidの学部名とりだし
    $departmentcategorie3s=Departmentcategory::where('id',$departmentcategory_id)->get();


    $categorymo1s=Category::where('time','like','%月1%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorymo2s=Category::where('time','like','%月2%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorymo3s=Category::where('time','like','%月3%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorymo4s=Category::where('time','like','%月4%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorymo5s=Category::where('time','like','%月5%')->where('departmentcategory_id',$departmentcategory_id)->get();

    $categorytu1s=Category::where('time','like','%火1%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorytu2s=Category::where('time','like','%火2%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorytu3s=Category::where('time','like','%火3%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorytu4s=Category::where('time','like','%火4%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorytu5s=Category::where('time','like','%火5%')->where('departmentcategory_id',$departmentcategory_id)->get();

    $categorywe1s=Category::where('time','like','%水1%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorywe2s=Category::where('time','like','%水2%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorywe3s=Category::where('time','like','%水3%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorywe4s=Category::where('time','like','%水4%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categorywe5s=Category::where('time','like','%水5%')->where('departmentcategory_id',$departmentcategory_id)->get();

    $categoryth1s=Category::where('time','like','%木1%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryth2s=Category::where('time','like','%木2%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryth3s=Category::where('time','like','%木3%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryth4s=Category::where('time','like','%木4%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryth5s=Category::where('time','like','%木5%')->where('departmentcategory_id',$departmentcategory_id)->get();

    $categoryfr1s=Category::where('time','like','%金1%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryfr2s=Category::where('time','like','%金2%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryfr3s=Category::where('time','like','%金3%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryfr4s=Category::where('time','like','%金4%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryfr5s=Category::where('time','like','%金5%')->where('departmentcategory_id',$departmentcategory_id)->get();
    $categoryfr6s=Category::where('time','like','%金6%')->where('departmentcategory_id',$departmentcategory_id)->get();

       return view('departmenttop.index', [

        'departmentposts' => $departmentposts,
        'departmentcategories' => $departmentcategories, 
        'departmentcategory_id'=>$departmentcategory_id,
        'departmentcategorie2s'=> $departmentcategorie2s,
        'departmentcategorie3s'=> $departmentcategorie3s,


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
    
    public function store(DepartmentpostRequest $request)
{
    $savedata = [
        'name' => $request->name,
        'message' => $request->message,
        'departmentcategory_id' => $request->departmentcategory_id,
    ];
 
    $post = new Departmentpost();
    $post->fill($savedata)->save();
 
    return back()->with('poststatus', '新規投稿しました');
}
	
}