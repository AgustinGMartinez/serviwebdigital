<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title><?php echo $title; ?> | Serviweb Digital</title>
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <!-- METAS -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="<?php echo $desc; ?>">
  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="../css/main.css" type="text/css">
  <?php if (isset($can)): ?>
    <link rel="canonical" href="<?php echo $can; ?>"/>
  <?php endif; ?>
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
    <link rel="canonical" href="https://www.serviwebdigital.com/es/home"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <?php endif; ?>
  <!-- Scripts -->
  <script async defer src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<div id="preloader">
  <img src="../img/loader.gif" alt="page loader gif" width="70px">
</div>

<div class="fake-nav <?php if (!isset($isHome)) echo "shrink"; ?>"></div>

<header>
  <nav class="navbar-light nav flex-column reg-nav alternative <?php if (!isset($isHome)) echo "shrink"; ?>">
    <div class="container my-nav-wrapper d-flex">
        <a class="navbar-brand brand" href="home"><img src="../img/SWD.svg" alt="Logo Serviweb Digital"></a>
      <div class="menu" <?php if (!isset($isHome)) echo "style='display: none'"; ?>>
        <div class="">
            <a href="home" class="hover-effect not-menu">Home</a>
        </div>
        <div class="servicies-link">
            <a href="servicio" class="hover-effect menu-panel-dropdown" data-panel-trigger="1">Diseño web</a>
        </div>
        <div class="servicies-link">
            <a href="servicio" class="hover-effect menu-panel-dropdown" data-panel-trigger="2">Diseño gráfico</a>
        </div>
        <div class="servicies-link">
            <a href="servicio" class="hover-effect menu-panel-dropdown" data-panel-trigger="3">Marketing</a>
        </div>
        <div class="servicies-link">
            <a href="servicio" class="hover-effect menu-panel-dropdown" data-panel-trigger="4">Video y fotografía</a>
        </div>
        <div class="">
            <a href="home#contact" class="hover-effect not-menu">Contacto</a>
        </div>
      </div>
      <div class="shrinkedMenu" <?php if (isset($isHome)) echo "style='display: none'"; ?>>
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
        <a class="ins-ic" href="https://www.instagram.com/serviwebdigital/">
          <span class="fab fa-instagram white-text mr-4"> </span>
        </a>
        <!-- whatsapp -->
        <a class="li-ic" href="https://api.whatsapp.com/send?phone=541122895991">
          <span class="fab fa-whatsapp white-text"> </span>
        </a>
      </div>
    </div>
  </nav>
</header>

<div class="wrapper <?php if (!isset($isHome)) echo "expand"; ?> wide">

  <div class="menu-panel menu-panel-1">
    <div class="panel-container">
      <div class="services-list">
        <a href="javascript:void(0)" class="service-dropdown close-mobile-menu"><span class="close-icon"></span></a>
        <a href="servicio?s=plantillas-web" class="service-dropdown" data-dtarget="1-1">Diseño web con plantillas</a>
        <a href="servicio?s=diseno-a-medida" class="service-dropdown" data-dtarget="1-2">Diseño web a medida</a>
        <a href="servicio?s=tienda-ecommerce" class="service-dropdown" data-dtarget="1-3">Tienda online</a>
        <a href="servicio?s=paginas-aterrizaje-landing-page" class="service-dropdown" data-dtarget="1-7">Páginas de aterrizaje</a>
        <a href="servicio?s=minisitios" class="service-dropdown" data-dtarget="1-4">Mini sitios</a>
        <a href="servicio?s=aplicaciones-web" class="service-dropdown" data-dtarget="1-5">Aplicaciones web</a>
        <a href="servicio?s=mantenimiento-web" class="service-dropdown" data-dtarget="1-6">Mantenimientos</a>
      </div>
      <div class="service-1-1 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=plantillas">Diseño web con plantillas</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>

          <img src="../img/vector.jpg" alt="" class="background">
        </div>
      </div>
      <div class="service-1-2 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=medida">Diseño web a medida</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-1-3 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=tienda">Tienda online</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-1-4 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=minisitios">Mini sitios</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-1-5 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=aplicaciones">Aplicaciones web</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-1-6 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=mantenimiento">Mantenimientos</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-1-7 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=paginas-aterrizaje-landing-page">Paginas de aterrizaje</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="menu-panel menu-panel-2">
    <div class="panel-container">
      <div class="services-list">
        <a href="javascript:void(0)" class="service-dropdown close-mobile-menu"><span class="close-icon"></span></a>
        <a href="servicio?s=identidad-corporativa" class="service-dropdown" data-dtarget="2-1">Identidad corporativa</a>
        <a href="servicio?s=logos" class="service-dropdown" data-dtarget="2-2">Logos</a>
        <a href="servicio?s=ploteos" class="service-dropdown" data-dtarget="2-3">Ploteos</a>
        <a href="servicio?s=diseno-publicitario" class="service-dropdown" data-dtarget="2-4">Diseño publicitario</a>
        <a href="servicio?s=lonas" class="service-dropdown" data-dtarget="2-5">Lonas</a>
        <!-- href pending -->
        <a href="servicio?s=catalogo" class="service-dropdown" data-dtarget="2-6">Catálogos</a>
        <a href="servicio?s=tarjetas" class="service-dropdown" data-dtarget="2-7">Tarjetas</a>
        <a href="servicio?s=vinilos" class="service-dropdown" data-dtarget="2-8">Vinilos</a>
        <a href="servicio?s=papeleria" class="service-dropdown" data-dtarget="2-9">Papelería</a>
        <a href="servicio?s=carteleria" class="service-dropdown" data-dtarget="2-10">Diseño de Cartelería</a>
        <a href="servicio?s=decoracion-de-interiores" class="service-dropdown" data-dtarget="2-11">Decoración de interior de local</a>
        <a href="servicio?s=folletos" class="service-dropdown" data-dtarget="2-12">Folletos</a>
        <a href="servicio?s=ilustracion" class="service-dropdown" data-dtarget="2-13">Ilustración</a>
        <a href="servicio?s=dibujos-estampado" class="service-dropdown" data-dtarget="2-14">Dibujos para estampado</a>
      </div>
      <div class="service-2-1 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=identidad-corporativa">Identidad corporativa</a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-2 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=logos">Logos</a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-3 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=ploteos">Ploteos</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-4 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=diseno-publicitario">Diseño publicitario</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-5 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=lonas">Lonas</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-6 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=catalogo">Catálogos</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-7 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=tarjetas">Tarjetas</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-8 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=vinilos">Vinilos</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-9 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=papeleria">Papelería</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-10 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=carteleria">Diseño de Cartelería</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-11 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=decoracion-de-interiores">Decoración de interior de local</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-12 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=folletos">Folletos</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-13 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=ilustracion">Ilustración</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-2-14 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=dibujos-estampado">Dibujos para estampado</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="menu-panel menu-panel-3">
    <div class="panel-container">
      <div class="services-list">
        <a href="javascript:void(0)" class="service-dropdown close-mobile-menu"><span class="close-icon"></span></a>
        <a href="servicio?s=google-adwords" class="service-dropdown" data-dtarget="3-1">Google Adwords</a>
        <a href="servicio?s=redes-sociales" class="service-dropdown" data-dtarget="3-2">Redes sociales</a>
        <a href="servicio?s=email-marketing" class="service-dropdown" data-dtarget="3-3">Email Marketing</a>
        <a href="servicio?s=google-mi-negocio" class="service-dropdown" data-dtarget="3-4">Google Mi Negocio</a>
      </div>
      <div class="service-3-1 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=google-adwords">Google Adwords</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-3-2 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=redes-sociales">Redes sociales</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-3-3 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=email-marketing">Email Marketing</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-3-4 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=google-mi-negocio">Google Mi Negocio</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="menu-panel menu-panel-4">
    <div class="panel-container">
      <div class="services-list">
        <a href="javascript:void(0)" class="service-dropdown close-mobile-menu"><span class="close-icon"></span></a>
        <a href="servicio?s=fotografia-de-productos" class="service-dropdown" data-dtarget="4-1">Fotografía de productos</a>
        <a href="servicio?s=sesion-fotografica" class="service-dropdown" data-dtarget="4-2">Sesión fotográfica</a>
        <a href="servicio?s=videos-promocionales" class="service-dropdown" data-dtarget="4-3">Videos promocionales</a>
        <a href="servicio?s=motion-graphics" class="service-dropdown" data-dtarget="4-5">Motion Graphics</a>
      </div>
      <div class="service-4-1 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=fotografia-de-productos">Fotografía de productos</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-4-2 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=sesion-fotografica">Sesión fotográfica</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-4-3 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=videos-promocionales">Videos promocionales</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
      <div class="service-4-5 service">
        <div class="service-container">
          <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <a href="servicio?s=motion-graphics">Motion Graphics</a>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque reprehenderit, a vitae totam consectetur amet veniam et cum laborum vero doloremque magni placeat. Praesentium excepturi saepe commodi ducimus dolorem, sapiente. Soluta error maxime dolore maiores. Itaque adipisci placeat deleniti odio.</p>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light mobile-nav fixed-top">

    <a class="navbar-brand brand mr-auto" href="home"><img src="../img/SWDpq.svg" alt="Logo Serviweb Digital"></a>

    <a href="contacto" class="ml-auto btn btn-danger text-white">Cotizar</a>

    <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <div id="nav-icon2">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <div class="container my-nav-wrapper d-flex nav-container-mobile">
        <div class="menu-mobile">
          <div class="">
              <a href="home" class="hover-effect">Home</a>
          </div>
          <div class="mobile-services-menu" data-target="1">
              <a class="hover-effect">Diseño web <span class="fa-arrow-right"></span></a>
          </div>
          <div class="mobile-services-menu" data-target="2">
              <a class="hover-effect">Diseño gráfico <span class="fa-arrow-right"></span></a>
          </div>
          <div class="mobile-services-menu" data-target="3">
              <a class="hover-effect">Marketing <span class="fa-arrow-right"></span></a>
          </div>
          <div class="mobile-services-menu" data-target="4">
              <a class="hover-effect">Fotografía y video <span class="fa-arrow-right"></span></a>
          </div>
          <div class="">
              <a href="javascript:void(0)" class="hover-effect">Portafolio</a>
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
          <a class="ins-ic" href="https://www.instagram.com/serviwebdigital/">
            <span class="fab fa-instagram white-text mr-4"> </span>
          </a>
          <!-- whatsapp -->
          <a class="li-ic" href="https://api.whatsapp.com/send?phone=541122895991">
            <span class="fab fa-whatsapp white-text"> </span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="floating">
    <button><span class="fab fa-whatsapp"></span><a href="https://api.whatsapp.com/send?phone=541122895991"></a></button>
  </div>
