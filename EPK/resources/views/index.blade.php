<div class="container">
    @extends('layouts.app')

    @section('content')
    @foreach ($posts as $post)
    <div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center">
    <div class="card d-flex justify-content-center" style="width: 40rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->description }}</p>
          <strong> {{ $post->user->name }} </strong>
          <p> Aangemaakt op {{ date('jS M Y', strtotime($post->updated_at)) }}
            {{-- Tijdelijke br's --}}
            <br>
            <br>
          <a href="/EPK/{{ $post->slug }}" class="btn btn-primary">Lees meer</a>
        </div>
      </div>
    </div>
    @endforeach
@endsection

</div>