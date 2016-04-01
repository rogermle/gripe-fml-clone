<!-- resources/views/post/index.blade.php -->

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
                @foreach($posts as $post)
                <div class="well">
                     {{ $post->post }}
                    <br>
                    <br>
                    <a href="#" class="btn btn-warning btn-xs">Your life sucks!</a><span class="text-warning"> ({{$post->agree}})</span>
                    <a href="#" class="btn btn-success btn-xs">You deserved it!</a><span class="text-warning"> ({{$post->disagree}})</span>
                    <a href="#" class="btn btn-link btn-xs">Comments</a><span class="text-warning"> ({{count($post->comments()->get())}})</span>
                    <span class="text-muted pull-right"><small>Created by: {{$post->nick}} on {{date('F d, Y h:i A', strtotime($post->created_at)) }}</small></span>
                </div>
                @endforeach

                {{$posts->links() }}
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="panel-body" style="padding: 0px;">
                        <div class="col-md-6" style="padding: 0px;">
                            <div class="table-responsive" style="border-left: 0;">
                                <table class="table table-striped table-hover table-bordered" style="margin: 0px;">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding: 0px;">
                            <div class="table-responsive" style="border-left: 0;">
                                <table class="table table-striped table-hover table-bordered" style="margin: 0px;">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection