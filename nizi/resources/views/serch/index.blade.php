<h1>検索条件を入力してください</h1>

<form action="{{ url('/serchnew')}}" method="post">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>科目名</label>
      <input type="text" class="form-control col-md-5" placeholder="検索したい授業名を入力してください" name="name">
    <label>教授名</label>
      <input type="text" class="form-control col-md-5" placeholder="検索したい教授名を入力してください" name="teacher">
    <label>学部名</label>
      <input type="number" class="form-control col-md-5" placeholder="検索したい学部名を入力してください" name="departmentcategory_id">
  </div>
  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>
@if(session('flash_message'))
<div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
@endif

