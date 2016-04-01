@extends('layouts.app')

@section('content')
    <div class="container">
        <p>
            <a href="{{url('/post/create')}}"><button class="btn btn-primary">Submit your gripe!</button></a>
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                    <div class="well">
                        {{ $data['post'] }}
                        <br>
                        <br>
                        <a href="#" class="btn btn-warning btn-xs">Your life sucks!</a><span class="text-warning"> ({{$post->agree}})</span>
                        <a href="#" class="btn btn-success btn-xs">You deserved it!</a><span class="text-warning"> ({{$post->disagree}})</span>
                        @foreach($data['comments'] as $comment)
                            <p>{{$comment}}</p>
                        @endforeach
                        <span class="text-muted pull-right"><small>Created by: {{$post->nick}} on {{date('F d, Y h:i A', strtotime($post->created_at)) }}</small></span>
                    </div>