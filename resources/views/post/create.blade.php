<!-- resources/views/post/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="form-area">
                <h3>Create your gripe!</h3>
            </div>

        </div>
        @include('common.errors')
        <div class="col-md-8">
            <form action="{{route('post.store')}}" method="post">
                <div class="form-group">
                    <label for="comment">Gripe:</label>
                    <textarea class="form-control" rows="5" name="body" id="gripe"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit Gripe" class="btn btn-primary pull-left" />
                </div>
            </form>
        </div>
    </div>
@endsection