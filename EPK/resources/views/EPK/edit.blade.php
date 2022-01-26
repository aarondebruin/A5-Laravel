@extends('layouts.app')
@section('content')
<div class="container">
  <form action="/EPK/{{ $post->slug }}"
  method="POST"
  enctype="multipart/form-data">
    @csrf
    @method('PUT')

        <h1> Edit Band </h1>
        <br>
        <div class="form-group">
          <label for="exampleFormControlInput1">Band name</label>
          <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{ $post->title }}">
        </div>
       
    
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Beschrijving</label>
          <textarea name="description" placeholder="Description..." class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $post->description }}</textarea>
        </div>

        <div class="form-group">
            <input name="image" type="file" class="form-control-file">
          </div>
      
          <button class="btn btn-primary" type="submit">Edit</button>

  </form>
</div>
@endsection