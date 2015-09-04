
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="blog, personal site, legoiv">
    <meta name="author" content="ansidev">

    <title>Hermit Blog</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}" />
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Bootstrap Core CSS -->
	<!-- <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> -->

    <!-- Custom CSS -->
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{ asset('/css/icomoon.min.css') }}" rel="stylesheet" type="text/css"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <i class="fa fa-home"></i>  <span class="light">Hermit</span> Blog
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about-me">About me</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projects">My projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Hermit Blog</h1>
                        <p class="intro-text">Blog of legoiv<br>Hand code by <a href="http://legoiv.tk/">legoiv</a><br>Built with <a href="http://laravel.com/">Laravel</a>, <a href="http://getbootstrap.com">Twitter Bootstrap</a>,...</p>
                        <a href="#about-me" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about-me" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About me</h2>
                <p>I am a developer.</p>
                <p>Main programming language: PHP.</p>
                <p>...</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="projects" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>My projects</h2>
                    <p>You can view my project on <a href="https://github.com/ansidev">GitHub</a>.</p>
                    <a href="https://github.com/ansidev" class="btn btn-default btn-lg">Visit My GitHub Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact me</h2>
                <p>Feel free to email me to provide some feedback on my blog, give me suggestions for my blog, ask me something or to just say hello!</p>
                <p><a href="mailto:legoiv@outlook.com">legoiv@outlook.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/ansidev" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <!-- <a href="https://facebook.com/ansidevpy" class="btn btn-default btn-lg"><i class="icon-facebook"></i> <span class="network-name">Facebook</span></a> -->
                        <a href="https://facebook.com/ansidevpy" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/ansidev" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; <a href="http://legoiv.tk/">Hermit Blog</a> 2015. Written by <a href="mailto:legoiv@outlook.com">legoiv</a>. Template for this page was forked from <a href="https://github.com/IronSummitMedia/startbootstrap-grayscale">Gray Scale Template</a>.</p>
        </div>
    </footer>

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script> -->
	<script src="//code.jquery.com/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- <script src="js/jquery.easing.min.js"></script> -->

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
