<h1>検索条件を入力してください</h1>

<form action="{{ url('/serchnew')}}" method="post">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>科目名</label>
      <input type="text" class="form-control col-md-5" placeholder="検索したい授業名を入力してください" name="name">
    <label>教授名</label>
      <input type="text" class="form-control col-md-5" placeholder="検索したい教授名を入力してください" name="teacher">
      <select
                                name="department"
                                type="text"
                                placeholder="学部名"
                                size="1"
                                >@foreach($departmentcategories as $departmentcategorie)
                            <option selected disabled>学部名</option>
　　　　　　　　　　　　　　　　　<option value="{{$departmentcategorie->name}}">{{$departmentcategorie->name}}</option>
                                @endforeach
　　　　　　　　　　　　　　　　</select>
  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>
@if(session('flash_message'))
<div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
@endif