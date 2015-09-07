<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Item Locator App</title>
        <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- <link href="{{ asset('/css/blog.css') }}" rel="stylesheet"> -->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <h1>Item Locator App</h1>
                    <p>Way to know where is your item!</p>
                </div>
                <div class="col-md-3">
                    <div class="well" style="margin-top:20px">
                        <div class="row">
                            <div class="col-md-12">
                                <p>CONTACT INFO</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="mailto:ansidev@gmil.com">ansidev@gmail.com</a></p>
                                <p><i class="fa fa-github"></i> <a href="https://github.com/ansidev">ansidev</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('items.index') }}">Item Locator App</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#">Link</a></li> -->
                    <!-- <li><a href="#">Link</a></li> -->
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                </form>
                </div><!-- /.navbar-collapse -->
            </nav>
            @yield('content')
        </div>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">&copy; 2015 by legoiv</p>
            </div>
        </footer>
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        {{-- // <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script> --}}
        @yield('script')
    </body>
</html>