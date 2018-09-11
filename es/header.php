<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title>Serviweb Digital | Tu garantía en la web</title>
  <link rel="icon" href="../ico.ico" type="image/x-icon">
  <!-- METAS -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="../css/main.css" type="text/css">
  <?php if (isset($isHome)) : ?>
    <link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../vendor/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../vendor/css/util.css">
  <?php endif; ?>
  <!-- Scripts -->
  <script async defer src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<div id="preloader">
  <img src="../img/loader.gif" alt="page loader gif" width="70px">
</div>

<div class="fake-nav"></div>

<header>
  <nav class="navbar-light nav flex-column reg-nav">
    <div class="container my-nav-wrapper d-flex">
        <a class="navbar-brand brand" href="home.php"><img src="../img/logo.jpg" alt="Logo Serviweb Digital"></a>
      <div class="menu">
        <div class="">
            <a href="home.php" class="hover-effect">Home</a>
        </div>
        <div class="servicies-link">
            <a href="javascript:void(0)" class="hover-effect menu-panel-dropdown">Servicios</a>
        </div>
        <div class="">
            <a href="javascript:void(0)" class="hover-effect">Precios</a>
        </div>
        <div class="">
            <a href="home.php#contact" class="hover-effect">Contacto</a>
        </div>
      </div>
      <div class="shrinkedMenu">
        <div id="nav-icon3" class="nav-icon3">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="social">
        <!-- Facebook -->
        <a class="fb-ic" href="">
          <span class="fab fa-facebook white-text mr-4"> </span>
        </a>
        <!--Instagram-->
        <a class="ins-ic" href="">
          <span class="fab fa-instagram white-text mr-4"> </span>
        </a>
        <!-- whatsapp -->
        <a class="li-ic" href="">
          <span class="fab fa-whatsapp white-text"> </span>
        </a>
      </div>
    </div>
  </nav>
</header>

<div class="wrapper">

  <div class="menu-panel">
    <div class="panel-container">
      <ul class="services-list">
        <li class="service-dropdown" dtarget="1">Diseño web</li>
        <li class="service-dropdown" dtarget="2">Diseño gráfico</li>
        <li class="service-dropdown" dtarget="3">Marketing digital</li>
        <li class="service-dropdown" dtarget="4">Video y fotografía</li>
      </ul>
      <div class="service1 service" style="display: none;">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3>Diseño web</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
          <h4>Lo que ofrecemos</h4>
          <ul>
            <li><a href="">Diseño web con plantillas</a></li>
            <li><a href="">Diseño web a medida</a></li>
            <li><a href="">Tienda online</a></li>
            <li><a href="">Mini sitios</a></li>
            <li><a href="">Aplicaciones web</a></li>
            <li><a href="">Mantenimientos</a></li>
          </ul>
        </div>
      </div>
      <div class="service2 service" style="display: none;">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3>Diseño gráfico</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
          <h4>Lo que ofrecemos</h4>
          <ul class="two-columns">
            <li><a href="">Identidad corporatia</a></li>
            <li><a href="">Logos</a></li>
            <li><a href="">Sublimación y serigrafía</a></li>
            <li><a href="">Diseño publicitario</a></li>
            <li><a href="">Packaging</a></li>
            <li><a href="">Catálogos</a></li>
            <li><a href="">Tarjetas</a></li>
            <li><a href="">Vinilos</a></li>
            <li><a href="">Papelería</a></li>
            <li><a href="">Diseño de Cartelería</a></li>
          </ul>
        </div>
      </div>
      <div class="service3 service" style="display: none;">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3>Marketing Digital</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
          <h4>Lo que ofrecemos</h4>
          <ul>
            <li><a href="">Google Marketing</a></li>
            <li><a href="">Social media</a></li>
            <li><a href="">Email Marketing</a></li>
            <li><a href="">Google Mi Negocio</a></li>
          </ul>
        </div>
      </div>
      <div class="service4 service" style="display: none;">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3>Fotografía y video</h3>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
          <h4>Lo que ofrecemos</h4>
          <ul>
            <li><a href="">Fotografía de productos</a></li>
            <li><a href="">Sesión fotográfica</a></li>
            <li><a href="">Videos promocionales</a></li>
            <li><a href="">Ilustración</a></li>
            <li><a href="">Motion Graphics</a></li>
            <li><a href="">Animación</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light mobile-nav fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <div id="nav-icon2">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
    <a class="navbar-brand brand ml-auto" href="home.php"><img src="../img/logo.jpg" alt="Logo Serviweb Digital"></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <div class="container my-nav-wrapper d-flex nav-container-mobile">
        <div class="menu-mobile">
          <div class="">
              <a href="home.php" class="hover-effect">Home</a>
          </div>
          <div class="mobile-services-menu">
              <a class="hover-effect">Servicios <span class="fa-arrow-right"></span></a>
          </div>
          <div class="">
              <a href="javascript:void(0)" class="hover-effect">Precios</a>
          </div>
          <div class="">
              <a href="home#contact" class="hover-effect">Contacto</a>
          </div>
        </div>
        <div class="social">
          <!-- Facebook -->
          <a class="fb-ic" href="">
            <span class="fab fa-facebook white-text mr-4"> </span>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="">
            <span class="fab fa-instagram white-text mr-4"> </span>
          </a>
          <!-- whatsapp -->
          <a class="li-ic" href="">
            <span class="fab fa-whatsapp white-text"> </span>
          </a>
        </div>
      </div>
    </div>
  </nav>
