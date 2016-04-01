<!-- resources/views/post/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="form-area">
                <h3>Create your gripe!</h3>
            </div>

        </div>
        <div class="col-md-8">
            @include('common.errors')
            <form action="{{route('post.store')}}" method="post">
                <div class="form-group">
                    <label for="comment">Gripe:</label>
                    <textarea class="form-control" rows="5" name="body" id="gripe"></textarea>
                </div>
                <div class="form-group">
                    <label for="nick">Nickname</label>
                    <input type="text" class="form-control" name="nick" id="nick" />
                </div>
                <div class="form-group">
                    <label for="sex">Sex</label>
                    <select class="form-control" name="sex" id="sex">
                        <option value="" selected="selected">--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit Gripe" class="btn btn-primary pull-left" />
                </div>
            </form>
        </div>
    </div>
@endsection