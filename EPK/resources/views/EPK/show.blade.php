@extends('layouts.app')

@section('content')

<link href="{{ asset('css/main.css') }}" rel="stylesheet">


<div class="container">
    <h1> {{ $post->title }} </h1>
    <p> {{  $post->description }} </p>
    <p> {{  $post->biography }} </p>
    <p> Gemaakt door {{ $post->user->name }} </p>
    <p> Aangemaakt op {{ date('jS M Y', strtotime($post->updated_at)) }}
    <x-embed url="{{ $post->youtube_url }}"  />
    <x-embed url="{{ $post->youtube_url2 }}" />
    <x-embed url="{{ $post->youtube_url3 }}" />
</div>


@endsection 