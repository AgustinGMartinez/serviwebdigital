<?php

include('includes/feature-properties.php');

if (isset($_GET['s'])) $service = $_GET['s'];
else $service = null;

switch ($service) {
  case 'plantillas':
      $title = "";
      $desc = "";
      $h1 = "Diseño web con plantillas";
      $p = "Diseñamos páginas web con una experiencia navegación que facilita la presentación de los productos o servicios.";
      $img = "../img/plantillas-web.jpg";
      $html = "<p>Nuestro equipo especializado en E-Business y nuevos modelos de negocio, asesora a nuestros clientes para escoger las tecnologías más apropiadas para su sitio web. El objetivo es cumplir todas sus expectativas en cuanto a diseño y funcionalidad.<p>  <div>Diseño Web de gran atractivo visual.<br>
      Desarrollo y diseño Web responsive.<br>
      Mejoras visuales del diseño con tecnología jquery.<br>
      Administración on-line a medida (ingresar, actualizar los contenidos).<br>
      Diseño de base de datos MySql, donde se almacenara la información.<br>
      Formulario de contacto dirigido al email de su empresa.<br>
      Posicionamos su sitio Web en las primeras posiciones de Google.<br>
      Servicio de Web Hosting de acuerdo a sus necesidades.<br>
      Consultaría en usabilidad<br>
      Atención y servicio personalizado.</div>";
      $features = array("rapidez", "plantillas", "responsive", "seo", "redes");
    break;
  case 'medida':
      $title = "";
      $desc = "";
      $h1 = "Diseño web a medida";
      $p = "Diseñamos páginas web con una experiencia navegación que facilita la presentación de los productos o servicios.";
      $img = "diseno-web-a-medida.jpg";
      $html = "<p>Nuestro equipo especializado en E-Business y nuevos modelos de negocio, asesora a nuestros clientes para escoger las tecnologías más apropiadas para su sitio web. El objetivo es cumplir todas sus expectativas en cuanto a diseño y funcionalidad.<p>  <div>Diseño Web de gran atractivo visual.<br>
      Desarrollo y diseño Web responsive.<br>
      Mejoras visuales del diseño con tecnología jquery.<br>
      Administración on-line a medida (ingresar, actualizar los contenidos).<br>
      Diseño de base de datos MySql, donde se almacenara la información.<br>
      Formulario de contacto dirigido al email de su empresa.<br>
      Posicionamos su sitio Web en las primeras posiciones de Google.<br>
      Servicio de Web Hosting de acuerdo a sus necesidades.<br>
      Consultaría en usabilidad<br>
      Atención y servicio personalizado.</div>";
      $features = array("gusto", "responsive", "seo", "ssl", "estadisticas", "redes");
    break;
  case 'tienda':
      $title = "";
      $desc = "";
      $h1 = "Tienda online e-commerce";
      $p = "Tu tienda en línea automatizada con gestión de productos, rebajas, envíos y mucho más.";
      $img = "tienda-online.jpg";
      $html = "";
      $features = array("responsive", "seo", "ssl", "redes", "cms", "administrable", "clientes", "stock", "estadisticas", "productos", "pagos", "envios", "ofertas", "descuentos", "datos", "carrito", "login", "soporte", "newsletter");
    break;
  case 'mini':
      $title = "";
      $desc = "";
      $h1 = "Minisitios";
      $p = "Promocioná tu producto o servicio, ofertas exclusivas, concursos o simplemente campañas de marketing.";
      $img = "landing.jpg";
      $html = "";
      $features = array("newsletter", "responsive", "estadisticas", "rapidez");
    break;
  case 'app':
      $title = "";
      $desc = "";
      $h1 = "Aplicaciones web";
      $p = "Funciones personalizadas para tu web. Bases de datos, interfacez interactivas y otros sistemas que precises.";
      $img = "web-app.jpg";
      $html = "";
      $features = array("personalizado", "soporte", "asesoramiento");
    break;
  case 'mant':
      $title = "";
      $desc = "";
      $h1 = "Mantenimiento web";
      $p = "Administramos tu web por vos, para que no tengas que preocuparte por el contenido, el diseño ni el servidor.";
      $img = "mantenimiento.jpg";
      $html = "";
      $features = array("soporte", "mantenimiento");
    break;

  default:
      $can = "https://www.serviwebdigital.com/servicio?s=medida";
      $title = "";
      $desc = "";
      $h1 = "Diseño web a medida";
      $p = "Diseñamos páginas web con una experiencia navegación que facilita la presentación de los productos o servicios.";
      $img = "../img/diseno-web-a-medida.jpg";
      $html = "<p>Nuestro equipo especializado en E-Business y nuevos modelos de negocio, asesora a nuestros clientes para escoger las tecnologías más apropiadas para su sitio web. El objetivo es cumplir todas sus expectativas en cuanto a diseño y funcionalidad.<p>  <div>Diseño Web de gran atractivo visual.<br>
      Desarrollo y diseño Web responsive.<br>
      Mejoras visuales del diseño con tecnología jquery.<br>
      Administración on-line a medida (ingresar, actualizar los contenidos).<br>
      Diseño de base de datos MySql, donde se almacenara la información.<br>
      Formulario de contacto dirigido al email de su empresa.<br>
      Posicionamos su sitio Web en las primeras posiciones de Google.<br>
      Servicio de Web Hosting de acuerdo a sus necesidades.<br>
      Consultaría en usabilidad<br>
      Atención y servicio personalizado.</div>";
      $features = array("gusto", "responsive", "seo", "ssl", "estadisticas", "redes");
    break;
}

include('header.php'); ?>

<main class="servicio">
  <section class="header">
    <div style="background-image: url('../img/<?php echo $img; ?>')" class="bg"></div>
    <div class="container">
      <h1><?php echo $h1; ?></h1>
      <p><?php echo $p; ?></p>
    </div>
  </section>
  <section class="info">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="content">
            <h2><?php echo $h1; ?></h2>
            <?php echo $html; ?>
          </div>
        </div>
        <div class="col-md-6">
          <form>
            <h3 class="text-center">Cotizar <?php echo strtolower($h1); ?></h3>
            <p class="text-center text-muted">Complete el formulario y nos contactaremos a la brevedad.</p>
            <div class="form-group">
              <input type="text" class="form-control" id="name" placeholder="Nombre y apellido">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="company" placeholder="Empresa">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="phone" placeholder="Teléfono">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="comments" placeholder="Comentarios"></textarea>
            </div>
            <input type="hidden" id="topic" value="<?php echo $h1; ?>">
            <button class="btn btn-danger d-block mx-auto">Cotizar</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="container">
      <div class="row">
      <?php $i = -1;if (!empty($features)) : foreach ($features as $feature): ?>
        <?php $i++; ?>
        <div class="feature feature<?php echo $i+1 ?> col-12 col-md-6 col-lg-4">
          <img src="../img/<?php echo $featuresProps[$feature]['img']; ?>" alt="<?php echo $featuresProps[$feature]['imgAlt']; ?>">
          <h3><?php echo $featuresProps[$feature]['title']; ?></h3>
          <p class="text-muted"><?php echo $featuresProps[$feature]['desc']; ?></p>
        </div>
      <?php endforeach; endif; ?>
      </div>
    </div>
  </section>
</main>

<?php
include('footer.php');
