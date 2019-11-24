@extends('layouts.profile')
 
 @section('title','Re:LieF')
  
  @section('content')
  <div class ="container">
    <div class="row">
        <div class ="col-md-8 mx-auto">
        <h2>キャッチコピー,もう一度学園生活を送ってみませんか</h2>
            <form action ="{{action('Admin\NewsController@create') }}"
            method="post" enctype="multipart/form-data">
        </div>
        
        <div class="form-group row">
           <label class ="col-md-2">名前</label>
           <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
           </div>
        </div>
       
       <div class="form-group row">
           <div class="col-md-10">
            <label class="col-md-2">性別</label>
                <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
           </div>
       </div>
       
        <div class="form-group row">
            <div class="col-md-10">
            <label class="col-md-2">趣味</label>
            　　  <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}"> 
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-md-10">
            <label class="col-md-2">自己紹介</label>
        <textarea class="form-control" name="introduction" rows ="20">{{old('introduction') }}</textarea>
            </div>
        </div>
        　</form>
     
  </div> 
</div>     
 @endsection
    