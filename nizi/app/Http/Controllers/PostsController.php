<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Post, App\Category; 
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
 
    return view('bbs.index', [
        'posts' => $posts, 
        'categories' => $categories, 
        'category_id'=>$category_id
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
 
    return view('bbs.create', ['categories' => $categories]);
}
 
 
    /**
     * バリデーション、登録データの整形など
     */
    public function store(PostRequest $request)
    {
        $savedata = [
        'name' => $request->name,
        'subject' => $request->subject,
        'message' => $request->message,
        'category_id' => $request->category_id,
    ];
 
        $post = new Post;
        $post->fill($savedata)->save();
 
        return redirect('/bbs')->with('poststatus', '新規投稿しました');
    }
}