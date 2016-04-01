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
                    {{ $post->body }}
                    <br>
                    <br>
                    <form class="btn-group" role="form" action="{{route('post.like', ['id'=>$post->id])}}" method="post">
                        <input type="submit" class="btn btn-success btn-xs" value="Your life sucks!" /><span class="text-warning"> ({{$post->agree}})</span>
                        <input type="hidden" name="_method" value="put" />
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    </form>

                    <form class="btn-group" role="form" action="{{route('post.dislike', ['id'=>$post->id])}}" method="post">
                        <input type="submit" class="btn btn-warning btn-xs" value="You deserved it!" /><span class="text-warning"> ({{$post->disagree}})</span>
                        <input type="hidden" name="_method" value="put" />
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    </form>
                    <form class="btn-group">
                        <a href="{{route('post.show', ['post' => $post->id])}}" class="btn btn-link btn-xs">Comments</a><span class="text-warning"> ({{count($post->comments)}})</span>
                    </form>
                    <span class="text-muted pull-right"><small>Created by: {{$post->nick}} ({{$post->sex}}) on {{date('F d, Y h:i A', strtotime($post->created_at)) }}</small></span>
                </div>
            @endforeach

            {{$posts->links() }}
        </div>

        <!--<div class="col-md-4">
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
                    </div> -->
    </div>
</div>
</div>
</div>
</div>