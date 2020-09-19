<h1>検索条件を入力してください</h1>

<form action="{{ url('/serchnew')}}" method="post">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>科目名</label>
      <input type="text" class="form-control col-md-5" placeholder="検索したい授業名を入力してください" name="name">
    <label>教授名</label>
      <input type="text" class="form-control col-md-5" placeholder="検索したい教授名を入力してください" name="teacher">

　　<div class="form-group col-sm-2">
                            <select 
                                name="departmentcategory_id"
                                type="number"
                                placeholder="学部名"
                                size="1"
                                >
                            <option selected disabled>学部名</option>
　　　　　　　　　　　　　　　　　<option value="1">共通</option>
　　　　　　　　　　　　　　　　　<option value="2">理工学部</option>
　　　　　　　　　　　　　　　　　<option value="3">FLA</option>
　　　　　　　　　　　　　　　　　<option value="4">経済学部</option>
　　　　　　　　　　　　　　　　</select>

  </div>
  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>
@if(session('flash_message'))
<div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
@endif

