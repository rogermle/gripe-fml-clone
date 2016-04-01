<!-- resources/views/layouts/app.blade.php ->

<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Bootstrap Boilerplate  -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <title>Gripe</title>

        <!-- CSS And JavaScript -->
<!-- React -->
<script src="https://fb.me/react-0.13.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.29/browser.js"></script>
</head>

<!-- Bootstrap Boilerplate... -->
<link href="https://bootswatch.com/spacelab/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
<link href="/css/style.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src=""></script>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Gripe</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{set_active('topgripes')}}"><a href="{{route('topgripes')}}">Top Gripes<span class="sr-only">(current)</span></a></li>
                    <li class="{{set_active('randomgripes')}}"><a href="{{route('randomgripes')}}">Random Gripes</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search" method="get" action="/post/search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="query" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#">Sign in</a></li>
                    <li><a href="#">Sign up</a></li>-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>
<body>
    @yield('content')
</body>
</html>