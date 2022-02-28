@section('title')
<title>GrupoBade</title>
@stop

@section('favicon')
    <!-- Favicons -->
    <link href="img/favicon2.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
@stop

@section('header')

    <header id="header">

        <div id="topbar">
        <div class="container">
            <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        </div>

        <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="#intro" class="scrollto"><span> <img src="img/logotipo.png" alt=""> </span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
            <li class="active"><a href="#intro">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li>
            <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Drop Down 2</a>
                    <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
                </ul>
            </li>
            <li><a href="#footer">Contact Us</a></li>
            </ul>
        </nav><!-- .main-nav -->
        
        </div>
    </header><!-- #header -->

@stop

@section('content')
    // content of main
@stop

@section('footer')
    <footer id="footer" class="section-bg">

    <div class="container">
    <div class="copyright">
        &copy; Copyright <strong>Jorge Aguilar</strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
    </div>
    </div>
    </footer><!-- #footer -->
@stop