@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Posts</h1>
</div>
   @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written On {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
    <p>No Posts Yet</p>
    @endif
@endsection