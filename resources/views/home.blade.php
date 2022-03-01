@include('app')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @yield('title')
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  @yield('favicon')

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
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
        <h1 class="text-light"><a href="#intro" class="scrollto"><span><img src="img/logotipo.png" alt=""></span></a></h1>
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

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Rapid Solutions<br>for Your <span>Business!</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/login.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">

            <div class="about-content" id ="autentificarse">
              <h2>Autenticación</h2>
              <h3>Es necesario para continuar...</h3>
              
                <div class="autentificacion">

                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--<h6 class="modal-title" id="exampleModalLabel">Es necesario autentificarse para continuar.</h6>-->
                                </div>
                                <div class="col-md-12" style="text-align:center;">
                                    <img src="https://i.ibb.co/MkSMjC8/Logo-web.png" width="60%" alt="">
                                </div>
                                <div class="col-md-12" id="mensajeError">
                                    
            <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
                <!--<x-auth-validation-errors class="mb-4" :errors="$errors" />-->

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            @endif

                                    <div id="validation"></div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="modal-body">            
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">                      
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="email" name="email"  id="email"  class="form-control" :value="old('email')" placeholder="Ingresa tu correo" required>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="password" name="password"  id="password" class="form-control" autocomplete="current-password" placeholder="Ingresa tu contraseña" required>
                                        <span style="display: none;" id='mostrar'><i class="fa fa-eye" aria-hidden="true"></i></span>
                                    </div>
                                    </div>
                                </div>
                                                    
                                    <p id="recuperaContrasenia">  Olvidé mi contraseña  </p>
                                
                                <div class="modal-footer">                  
                                <!--<button type="button" class="btn btn-primary btn-sm" onclick="validaContraseña"  id="buttonBade">continuar</button>-->
                                <x-button class="ml-3" class="btn btn-primary btn-sm"  id="buttonBade">
                                    {{ __('Log in') }}
                                </x-button>
                                </div>                   
                            </form>              
                        </div>
                    
                    </div>
                    </div>
                </div>
              
            </div>
            

            <!-- RECUPERAR CONTRASEÑA -->

            <div class="about-content" id ="olvidoContrasenia" style="display:none;">
              <h2>Recuperar Contraseña</h2>
              <!--<h3>Olvido su contraseña? No hay problema...</h3>-->
              
                <div class="autentificacion">

                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-12">
                                </div>
                                <div class="col-md-12" style="text-align:center;">
                                    <img src="https://i.ibb.co/MkSMjC8/Logo-web.png" width="60%" alt="">
                                </div>
                                <div class="col-md-12">
                                    <p class="olvidoContrasenia"> ¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico 
                                        y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.</p>
                                </div>
                                <div class="col-md-12">
                                    <div id="validation"></div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="modal-body">     
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-12">                      
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="email" name="correoPw"  id="correoPw"  class="form-control" placeholder="Ingresa tu correo" >
                                    </div>
                                    </div>
                                </div>

                                <i class="fa fa-reply" aria-hidden="true" id="regresarLogin"></i>

                                <div class="modal-footer">                  
                                <button type="button"  class="btn btn-primary btn-sm"  id="buttonBade" > Enviar enlace de restablecimiento de contraseña</button>
                                </div>                   
                            </form>     
                                            
                        </div>
                    
                    </div>
                    </div>
                </div>
              
            </div>



          </div>
        </div>
      </div>

    </section><!-- #about -->


  </main>

@yield('footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/index.js"></script>

</body>
</html>
