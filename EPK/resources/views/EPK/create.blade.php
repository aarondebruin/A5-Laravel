@extends('layouts.app')
@section('content')
<div class="container">
  <form action=""
  method="POST"
  enctype="multipart/form-data">
    @csrf

    
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title..">
        </div>
       
    
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea name="description" placeholder="Description..." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
            <input name="image" type="file" class="form-control-file">
          </div>
      
          <button class="btn btn-primary" type="submit">Button</button>

  </form>
</div>
@endsection