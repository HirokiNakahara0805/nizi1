@extends('layout.bbslayout')
 
@section('title', 'LaravelPjt BBS 投稿の一覧ページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', '投稿一覧ページの説明文')
@section('pageCss')
<link href="/css/bbs/style.css" rel="stylesheet">
@endsection
 
 
@section('content')
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->created_at->format('Y.m.d') }}</td>
                <td>{{ $category->name }}</td>
               
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

<span class="btn"><a href="{{ route('bbs.index', ['category_id'=>$category_id]) }}" >掲示板</a></span>
<span class="btn"><a href="{{ route('syllabus.index', ['category_id'=>$category_id]) }}" >シラバス</a></span>
<span class="btn"><a href="{{ route('evaluation.index', ['category_id'=>$category_id]) }}" >評価投稿画面</a></span>

<div class="mt-4 mb-4">
    @foreach($categories as $id => $name)
    <span class="btn"><a href="{{ route('generaltop.index', ['category_id'=>$id]) }}" title="{{ $name }}">{{ $name }}</a></span>
    @endforeach
</div>