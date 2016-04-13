<!-- resources/views/page/moderategripes.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @if(count($post) === 1)
                    <div class="well">
                        {{ $post->body }}
                        <br>
                        <br>
                        <span class="text-muted pull-right"><small>Created by: {{$post->nick}} ({{$post->sex}}) on {{date('F d, Y h:i A', strtotime($post->created_at)) }}</small></span>
                    </div>
                @else
                    <h4>No posts to moderate</h4>
                @endif
            </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                    <form action="foo/bar" method="post" style="display:inline;">
                        <input type="submit" class="btn btn-success btn-lg" value="Yes"/>
                    </form>
                </div>
                <div class="btn-group">
                    <form action="foo/bar" method="post" style="display:inline;">
                        <input type=submit" class="btn btn-danger btn-lg" value="No"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection