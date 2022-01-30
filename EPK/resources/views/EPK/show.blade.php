@extends('layouts.app')

@section('content')

<div class="container">
    <h1> {{ $post->title }} </h1>
    <p> {{  $post->description }} </p>
    <p> Gemaakt door {{ $post->user->name }} </p>
    <p> Aangemaakt op {{ date('jS M Y', strtotime($post->updated_at)) }}
    <x-embed url="{{ $post->youtube_url }}" />
</div>


@endsection