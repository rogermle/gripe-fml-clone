@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row">
            <hr>
            <p>Posted on {{date('F d, Y h:i A', strtotime($post->created_at)) }}</p>
            <p>by {{$post->nick}}</p>
            <hr/>
        </div>
        <div class="row">
            <p>{{$post->body}}</p>
            <hr/>
        </div>
        <div class="row">
            <ol style="list-style: decimal inside;">
            @foreach($post->comments as $comment)
                    <li>{{$comment->comment}}</li>
                    <hr/>
            @endforeach
            </ol>

        </div>
        <div class="row">
            @include('common.errors')
            <form action="{{route('post.comments.store', ['post' => $post->id])}}" method="post">
                    <div class="form-group">
                        <label for="comment">Leave a comment</label>
                        <textarea class="form-control" name="comment" id="comment" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Comment" class="btn btn-primary pull-left" />
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection