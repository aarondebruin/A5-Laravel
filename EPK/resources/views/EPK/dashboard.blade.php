@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('message'))
    <p> {{ session()->get('message') }}
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Maak hier je EPK</div>
                
                <div class="card-body">
                    @if (Auth::check())

                    <div class="">
                        <a class="btn btn-primary" href="create">Maak band</a>
                    </div>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
