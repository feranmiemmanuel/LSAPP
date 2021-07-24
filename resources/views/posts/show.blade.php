@extends('layouts.app')
    @section('content')
    
        <div class="jumbotron text-center">
           <h1>{{$post->title}}</h1>
        </div>
            <div class="well">
                <h3>{!!$post->body!!}</h3>
            </div>
            <hr>
                <small>Written on {{$post->created_at}}</small>
                <br>
        <a href="/posts" class="btn btn-primary">Go Back</a>
    @endsection