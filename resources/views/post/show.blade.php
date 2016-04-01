@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <hr>
        <div class="row">
            {{$post->body}}
        </div>
        <div class="row">
            @foreach($post->comments as $comment)
                <p>{{$comment->comment}}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection