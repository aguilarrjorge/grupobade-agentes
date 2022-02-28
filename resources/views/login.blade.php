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
 @yield('header')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Fuerza de Ventas<br>Control <span>de Procesos.</span></h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Ingresar</a>
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
            <div class="about-content">

            <div class="autentificacion" id="autentificarse">
                <h2>Ingresar </h2>
                <h3>Es necesario autentificarse para continuar.</h3>

                <form id="formContrasenia" autocomplete="off">

                    <div class="form-row">
                        <div class="form-group col-md-12">                      
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            </div>
                            <input type="email" name="correoLogin"  id="correoLogin"  class="form-control" placeholder="Ingresa tu correo" >
                        </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
                            </div>
                            <input type="password" name="contrasenia"  id="contrasenia"  class="form-control" placeholder="Ingresa tu contraseña" >
                            <span style="display: none;" id='mostrar'><i class="fa fa-eye" aria-hidden="true"></i></span>
                        </div>
                        </div>
                    </div>
                                        
                        <p id="recuperaContrasenia"> Olvidé mi contraseña</p>
                    
                    <div class="modal-footer">                  
                    <button type="button" class="btn btn-primary btn-sm" onclick="validaContraseña()"  id="validaContraseña">continuar</button>
                    </div>                   
                </form>  
            </div>

            <div class="autentificacion" id="olvidoContrasenia" style="display:none;">
                <h2>Recuperar Contraseña </h2>
                <h3>Ingrese su correo electronico para continuar.</h3>

                <form id="formContrasenia" autocomplete="off">

                    <div class="form-row">
                        <div class="form-group col-md-12">                      
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            </div>
                            <input type="email" name="correoLogin"  id="correoLogin"  class="form-control" placeholder="Ingresa tu correo" >
                        </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer">                  
                    <button type="button" class="btn btn-primary btn-sm" onclick="validaContraseña()"  id="validaContraseña">continuar</button>
                    </div>                   
                </form>  
            </div>
             
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


  <!--==========================
    Footer
  ============================-->
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
