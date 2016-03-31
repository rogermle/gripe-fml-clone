<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')

        <!-- Bootstrap Boilerplate... -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src=""></script>
<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')
            <!-- New Task Form -->
    <form action="{{ url('post') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}

                <!-- Task Name -->
        <div class="form-group">
            <label for="post" class="col-sm-3 control-label">Post</label>

            <div class="col-sm-6">
                <input type="text" name="Post" id="post" class="form-control">
            </div>
        </div>

        <!-- Add Post Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Post
                </button>
            </div>
        </div>
    </form>


    @foreach( $posts as $post )
            <div class="col-sm-offset-3 col-sm-6">
                <div class="well well">
                    <p>{{ $post->post }}</p>
                </div>
            </div>
    @endforeach

</div>

<!-- TODO: Current Posts -->
@endsection