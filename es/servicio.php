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
      $html = "<p></p>";
      $features = array("rapidez", "plantillas", "responsive", "seo", "redes");
    break;
  case 'medida':
      $title = "";
      $desc = "";
      $h1 = "Diseño web a medida";
      $p = "Diseñamos páginas web con una experiencia navegación que facilita la presentación de los productos o servicios.";
      $img = "diseno-web-a-medida.jpg";
      $html = "<p></p>";
      $features = array("gusto", "responsive", "seo", "ssl", "estadisticas", "redes");
    break;
  case 'tienda':
      $title = "";
      $desc = "";
      $h1 = "Tienda online e-commerce";
      $p = "Tu tienda en línea automatizada con gestión de productos, rebajas, envíos y mucho más.";
      $img = "tienda-online.jpg";
      $html = "<p>Transformá tu mayor medio de difusión en una plataforma de ventas automatizada, totalmente administrable y con posibilidad de manejar rápidamente ofertas y promociones para que tus productos estén siempre en la zona caliente.</p>";
      $features = array("responsive", "seo", "ssl", "redes", "cms", "administrable", "clientes", "stock", "estadisticas", "productos", "pagos", "envios", "ofertas", "descuentos", "datos", "carrito", "login", "soporte", "newsletter");
    break;
  case 'minisitios':
      $title = "";
      $desc = "";
      $h1 = "Minisitios";
      $p = "Promocioná tu producto o servicio, ofertas exclusivas, concursos o simplemente campañas de marketing.";
      $img = "landing.jpg";
      $html = "";
      $features = array("newsletter", "responsive", "estadisticas", "rapidez");
    break;
  case 'aplicaciones':
      $title = "";
      $desc = "";
      $h1 = "Aplicaciones web";
      $p = "Funciones personalizadas para tu web. Bases de datos, interfacez interactivas y otros sistemas que precises.";
      $img = "web-app.jpg";
      $html = "";
      $features = array("personalizado", "soporte", "asesoramiento");
    break;
  case 'mantenimiento':
      $title = "";
      $desc = "";
      $h1 = "Mantenimiento web";
      $p = "Administramos tu web por vos, para que no tengas que preocuparte por el contenido, el diseño ni el servidor.";
      $img = "mantenimiento.jpg";
      $html = "";
      $features = array("soporte", "mantenimiento");
    break;

  case 'identidad-corporativa':
      $title = "";
      $desc = "";
      $h1 = "Identidad Corporativa";
      $p = "Toda venta comienza por los ojos, asegura las tuyas en manos de un profesional.";
      $img = "identidad.jpg";
      $html = "";
      $features = null;
    break;

  case 'logos':
      $title = "";
      $desc = "";
      $h1 = "Logos";
      $p = "";
      $img = "logo-design.jpg";
      $html = "";
      $features = null;
    break;

  case 'ploteos':
      $title = "";
      $desc = "";
      $h1 = "Ploteos";
      $p = "";
      $img = "ploteo.jpg";
      $html = "";
      $features = null;
    break;

  case 'diseno-publicitario':
      $title = "";
      $desc = "";
      $h1 = "Diseño publicitario";
      $p = "";
      $img = "publicitario.jpg";
      $html = "";
      $features = null;
    break;

  case 'lonas':
      $title = "";
      $desc = "";
      $h1 = "Lonas";
      $p = "";
      $img = "lona.jpg";
      $html = "";
      $features = null;
    break;

  case 'catalogo':
      $title = "";
      $desc = "";
      $h1 = "Catálogos";
      $p = "";
      $img = "catalogo.jpg";
      $html = "";
      $features = null;
    break;

  case 'tarjetas':
      $title = "";
      $desc = "";
      $h1 = "Tarjetas";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'vinilos':
      $title = "";
      $desc = "";
      $h1 = "Vinilos";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'carteleria':
      $title = "";
      $desc = "";
      $h1 = "Carteleria";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'papeleria':
      $title = "";
      $desc = "";
      $h1 = "Papeleria";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'decoracion-de-interiores':
      $title = "";
      $desc = "";
      $h1 = "Decoración de interior";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'folletos':
      $title = "";
      $desc = "";
      $h1 = "Folletos";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'ilustracion':
      $title = "";
      $desc = "";
      $h1 = "Ilustración";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'dibujos-estampado':
      $title = "";
      $desc = "";
      $h1 = "Dibujos para estampado";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'adwords':
      $title = "";
      $desc = "";
      $h1 = "Google Adwords";
      $p = "Publicitá en google e incrementá tus visitas y posición natural en el ranking.";
      $img = "google-marketing.jpg";
      $html = "";
      $features = array("crecimiento", "despreocupate", "estadisticas");
    break;

  case 'email':
      $title = "";
      $desc = "";
      $h1 = "Email marketing";
      $p = "Conectate más rápido y directo con todos tus clientes y mantenete en contacto con ellos.";
      $img = "email.jpg";
      $html = "";
      $features = array("conexion", "economico", "eficiente", "estadisticas", "gusto");
    break;

  case 'sociales':
      $title = "";
      $desc = "";
      $h1 = "Marketing de redes";
      $p = "No sigas a tu público objetivo, dejá que él te siga a vos.";
      $img = "redes.jpg";
      $html = "";
      $features = array("crecimiento", "eficiente", "conexion", "redes", "despreocupate", "seo");
    break;

  case 'negocio':
      $title = "";
      $desc = "";
      $h1 = "Google Mi Negocio";
      $p = "Destacate por sobre la competencia local en google maps y el buscador.";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = array("destacate", "economico", "estadisticas", "despreocupate");
    break;

  case 'fotografia-de-productos':
      $title = "";
      $desc = "";
      $h1 = "Fotografía de productos";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'sesion-fotografica':
      $title = "";
      $desc = "";
      $h1 = "Sesión fotográfica";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'videos-promocionales':
      $title = "";
      $desc = "";
      $h1 = "Videos promocionales";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  case 'motion-graphics':
      $title = "";
      $desc = "";
      $h1 = "Motion Graphics";
      $p = "";
      $img = "mi-negocio.jpg";
      $html = "";
      $features = null;
    break;

  default:
      $can = "https://www.serviwebdigital.com/servicio?s=medida";
      $title = "";
      $desc = "";
      $h1 = "Diseño web a medida";
      $p = "Diseñamos páginas web con una experiencia navegación que facilita la presentación de los productos o servicios.";
      $img = "../img/diseno-web-a-medida.jpg";
      $html = "<p></p>";
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
        <div class="col-md-7">
          <div class="content">
            <h2 class="text-center"><?php echo $h1; ?></h2>
            <?php echo $html; ?>
          </div>
        </div>
        <div class="col-md-5">
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
<?php if (!empty($features)) :  ?>
  <section class="features">
    <div class="container">
      <div class="row">
      <?php $i = -1; foreach ($features as $feature): ?>
        <?php $i++; ?>
        <div class="feature feature<?php echo $i+1 ?> col-12 col-md-6 col-lg-4">
          <img src="../img/<?php echo $featuresProps[$feature]['img']; ?>" alt="<?php echo $featuresProps[$feature]['imgAlt']; ?>">
          <h3><?php echo $featuresProps[$feature]['title']; ?></h3>
          <p class="text-muted"><?php echo $featuresProps[$feature]['desc']; ?></p>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
</main>

<?php
include('footer.php');
