<html>
<head>
  
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
  <body>  
<div class="container">
    @extends('layouts.app')

    @section('content')

    <div class="container searchbar">
      <p>Search!</p>
      <form action="{{ route('EPK.search') }}" method="GET" >
        <input class="form-control" type="search" name="query">
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
      

    @foreach ($posts as $post)
    <div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center">
    <div class="card d-flex justify-content-center" style="width: 150%;">
        <img class="imgpic card-img-top" src="{{ asset('images/' . $post->image_path) }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->description }}</p>
          <strong> {{ $post->user->name }} </strong>
           <p class="fst-italic">Aangemaakt op {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
            {{-- Tijdelijke br's --}}
            <br>
            <br>
          <a href="/EPK/{{ $post->slug }}" class="btn btn-outline-success">Lees meer</a>

          <br>
          <br>

          @if (isset(Auth::user()->id) && Auth::user()->id ==$post->user_id)

          <p style="margin-left:90%;"> 
            <a class="edtknp" href="/EPK/{{ $post->slug }}/edit">Edit</a> 

          <p> 
            <a href="/EPK/{{ $post->slug }}/edit" class="btn btn-primary" >
              Edit 
            </a> 

          </p>
          <p> 
            <form action="/EPK/{{ $post->slug }}" method="POST"> @csrf @method('delete')
              <button class="btn btn-outline-danger"> Delete  
              </button> 
            </form>
          </p>

          @endif
        </div>
      </div>
    </div>
    @endforeach
@endsection

</div>
</body>
</html>