<?php

require_once('service-descriptions.php');

if (isset($_GET['s'])) $service = $_GET['s'];
else $service = null;

switch ($service) {
  case 'plantillas-web':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Diseño web con plantillas";
      $p = "Diseñamos tu web con nuestras hermosas plantillas pre-diseñadas. La mejor opción para empezar.";
      $img = "../img/plantillas-web.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("rapidez", "plantillas", "responsive", "seo", "redes");
    break;
  case 'diseno-a-medida':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Diseño web a medida";
      $p = "Dale nueva vida a tu marca con diseños deslumbrantes, experiencias de usuario memorables, y una identidad de marca cautivadora.";
      $img = "diseno-web-a-medida.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("gusto", "responsive", "seo", "ssl", "estadisticas", "redes");
    break;
  case 'tienda-ecommerce':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Tienda online e-commerce";
      $p = "Hacé de tu presencia online una plataforma de ventas automatizada con gestión de productos, rebajas, envíos y mucho más.";
      $img = "tienda-online.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("responsive", "seo", "ssl", "redes", "cms", "administrable", "clientes", "stock", "estadisticas", "productos", "pagos", "envios", "ofertas", "descuentos", "datos", "carrito", "login", "soporte", "newsletter");
    break;
  case 'paginas-aterrizaje-landing-page':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Landing Page (página de aterrizaje)";
      $p = "Promocioná tu producto o servicio con ofertas exclusivas en campañas de marketing.";
      $img = "landing-page.png";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("newsletter", "responsive", "estadisticas", "rapidez");
    break;
  case 'minisitios':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Minisitios";
      $p = "Promocioná tu producto o servicio, ofertas exclusivas, concursos o simplemente campañas de marketing.";
      $img = "startup.png";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("newsletter", "responsive", "estadisticas", "rapidez");
    break;
  case 'aplicaciones-web':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Aplicaciones web";
      $p = "Funciones personalizadas para tu web. Bases de datos, interfacez interactivas y otros sistemas que precises.";
      $img = "web-app.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("personalizado", "soporte", "asesoramiento");
    break;
  case 'mantenimiento-web':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Mantenimiento web";
      $p = "Administramos tu web por vos, para que no tengas que preocuparte por el contenido, el diseño ni el servidor.";
      $img = "mantenimiento.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("soporte", "mantenimiento");
    break;

  case 'identidad-corporativa':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Identidad Corporativa";
      $p = "Toda venta comienza por los ojos, asegura las tuyas en manos de un profesional.";
      $img = "identidad.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'logos':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Logos";
      $p = "";
      $img = "logo-design.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'ploteos':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Ploteos";
      $p = "";
      $img = "ploteo.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'diseno-publicitario':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Diseño publicitario";
      $p = "";
      $img = "publicitario.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'lonas':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Lonas";
      $p = "";
      $img = "lona.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'catalogo':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Catálogos";
      $p = "";
      $img = "catalogo.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'tarjetas':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Tarjetas";
      $p = "";
      $img = "tarjeta-ale.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'vinilos':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Vinilos";
      $p = "";
      $img = "mi-negocio.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'carteleria':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Carteleria";
      $p = "";
      $img = "mi-negocio.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'papeleria':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Papeleria";
      $p = "";
      $img = "mi-negocio.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'decoracion-de-interiores':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Decoración de interior";
      $p = "";
      $img = "decoracion-de-interior.jpeg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'folletos':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Folletos";
      $p = "";
      $img = "folleto.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'ilustracion':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Ilustración";
      $p = "";
      $img = "ilustracion.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'dibujos-estampado':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Dibujos para estampado";
      $p = "";
      $img = "mi-negocio.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'google-adwords':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Google Adwords";
      $p = "Publicitá en google e incrementá tus visitas y posición natural en el ranking.";
      $img = "google-marketing.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("crecimiento", "despreocupate", "estadisticas");
    break;

  case 'redes-sociales':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Marketing de redes";
      $p = "No sigas a tu público objetivo, dejá que él te siga a vos.";
      $img = "redes.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("crecimiento", "eficiente", "conexion", "redes", "despreocupate", "seo");
    break;

  case 'email-marketing':
      $data = get_description($service);
      $title = "Cómo aumentar tus ventas a tráves de ".$service;
      $desc = "";
      $h1 = "Email marketing";
      $p = "Dale a tus clientes más de lo que piden con campañas de email de marcas. Podemos ayudarte a comenzar o continuar cultivando una relación duradera con tus subscriptores de email.";
      $img = "email.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("conexion", "economico", "eficiente", "estadisticas", "gusto");
    break;

  case 'google-mi-negocio':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Google Mi Negocio";
      $p = "Destacate por sobre la competencia local en google maps y el buscador.";
      $img = "mi-negocio.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("destacate", "economico", "estadisticas", "despreocupate");
    break;

  case 'fotografia-de-productos':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Fotografía de productos";
      $p = "No dejes que fotos o videos de segunda quiten prestigio a tu marca. Nuestro servicio eleva tu marca al nivel profesional que se merece.";
      $img = "fotografia-de-productos.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'sesion-fotografica':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Sesión fotográfica";
      $p = "";
      $img = "sesion-fotografica.jpeg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'videos-promocionales':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Videos promocionales";
      $p = "Videos que aumentan tu presencia de marca y ventas.";
      $video = "videos-promocionales.mp4";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  case 'motion-graphics':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Motion Graphics";
      $p = "Dales vida a tus mensajes con videos animados.";
      $video = "motion-graphics.mp4";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  default:
      header('Location: servicio?s=diseno-a-medida');
    break;
}
