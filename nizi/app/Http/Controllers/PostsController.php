<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Post, App\Category,App\Post2,App\Departmentcategory; 
use App\Http\Requests\PostRequest;
 
class PostsController extends Controller
{
    public function index(Request $request)
{
    // カテゴリ取得
    $category = new Category;
    $categories = $category->getLists();
 
    $category_id = $request->category_id;
    if (!is_null($category_id)) {
        $posts = Post::where('category_id', $category_id)->orderBy('created_at', 'desc')->paginate(10);
    } else {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
    }

    //カテゴリーネームを取得するときに使うもの
    $category2s=Category::where('id',$category_id)->get();
    //いいね平均について
    $goodpost2s = Post2::where('category_id',$category_id)->get();
        if (!is_null($category_id)) {
            $post2s = Post2::where('category_id', $category_id)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $post2s = Post2::orderBy('created_at', 'desc')->paginate(10);
        }

    //下の科目名一覧
    $departmentcategory_id = $request->departmentcategory_id;
    $categorydepas=Category::where('departmentcategory_id',$departmentcategory_id)->get();
    //デパートメントidの学部名とりだし
    $departmentcategories=Departmentcategory::where('id',$departmentcategory_id)->get();


       
 
    return view('bbs.index', [
        'posts' => $posts, 
        'categories' => $categories, 
        'category_id'=>$category_id,
        'category2s'=>$category2s,
        'goodpost2s' => $goodpost2s,
        'post2s' => $post2s, 

        'categorydepas' => $categorydepas,
        'departmentcategory_id'=>$departmentcategory_id,
        'departmentcategories'=>$departmentcategories,

       
    ]);
}
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('bbs.show')->with('post', $post);
    } 
    
    /**
    * 投稿フォーム
    */
    public function create()
{
    $category = new Category;
    $categories = $category->getLists()->prepend('選択', '');
 
    return view('bbs.index');
}  
 
 
    /**
     * バリデーション、登録データの整形など
     */
    public function store(PostRequest $request)
    {
        $savedata = [
        'name' => $request->name,
        'year' => $request->year,
        'message' => $request->message,
        'category_id' => $request->category_id,
    ];
 
        $post = new Post;
        $post->fill($savedata)->save();
 
        return back()->with('poststatus', '新規投稿しました');
    }
}