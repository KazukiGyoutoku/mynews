@extends('layouts.profile')
 
 @section('title','Re:LieF')
  
  @section('content')
  <div class ="container">
    <div class="row">
        <div class ="col-md-8 mx-auto">
        <h2>キャッチコピー,もう一度学園生活を送ってみませんか</h2>
         </div>
            <form action ="{{action('Admin\NewsController@create') }}"
            method="post" enctype="multipart/form-data">
        </div>
        
        <div class="form-group row">
           <label class ="col-md-2">氏名</label>
        </div>
        <div class="col-md-10">
             <input type="text" class="form-control" style="width:150px;" name="name" value="{{ old('name') }}">
        </div>
       
       <div class="form-group row">
           <label class="col-md-2">性別</label>
       </div>
       <div class="col-md-10">
           <input type="text" style ="width:50px;" class="form-control" name="gender" value="{{ old('gender') }}">
       </div>
       
        <div class="form-group row">
            <label class="col-md-2">趣味</label>
        </div>    
        <div class="col-md-10">
            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}"> 
        </div>
      
        
        <div class="form-group row">
            <label class="col-md-2">自己紹介</label>
        </div>
        <div class="col-md-10">
            <textarea class="form-control" name="introduction" rows ="20">{{old('introduction') }}</textarea>
        </div>
       {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="送信">
          </form>
     
  </div> 
</div>     
 @endsection
    
