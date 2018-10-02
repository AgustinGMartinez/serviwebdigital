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
      $title = "";
      $desc = "";
      $h1 = "Aplicaciones web";
      $p = "Funciones personalizadas para tu web. Bases de datos, interfacez interactivas y otros sistemas que precises.";
      $img = "web-app.jpg";
      $description = "Your clients are mobile, so you must be too. We create user-friendly, responsive applications that help you connect with your customers in real-time.";
      $benefits = array("");
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
      $title = "";
      $desc = "";
      $h1 = "Identidad Corporativa";
      $p = "Toda venta comienza por los ojos, asegura las tuyas en manos de un profesional.";
      $img = "identidad.jpg";
      $description = "Memorable identity elements to captivate prospects and enhance the quality, voice and look of your organization. From concepts and ideas to an established brand that needs a refresh to fit its current goals, we bring vast experience and individual attention through a strategic creative process to develop a meaningful brand. Great design starts with purpose and goals tied to organizational vision. We guide our clients through a strategic process that produces a website that is user-centric, visually stunning and strategically driven to get results.
      How you present your entire brand identity is crucial to creating the right first impression. The importance of a good brand identity is often underestimated. Human perception still works in a very visual way. Potential customers can make up their mind about you in seconds, just by looking at your logo.

We always start with designing your logo first. The logo design sets the tone for the rest of your brand. Once we have designed your logo, we design your stationery along with all of your online and offline marketing materials.

Finally, we produce a set of brand guidelines detailing how your brand should be represented across all of your marketing. This ensures that all of your communications adheres to a consistent brand identity.";
      $benefits = array("To convey your company’s message clearly
To confirm your company’s credibility
To connect emotionally with your target customers
To motivate consumers to engage with you
To encourage customer loyalty");
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

  case 'adwords':
      $title = "";
      $desc = "";
      $h1 = "Google Adwords";
      $p = "Publicitá en google e incrementá tus visitas y posición natural en el ranking.";
      $img = "google-marketing.jpg";
      $description = "We create rich, relevant ads, using both data and experience to attract targeted traffic to your website with cost-effective techniques. \n\nhttps://cacpro.com/digital-marketing-social-media-seo/ \n\n Google Adwords or ‘pay per click’ is where you pay Google every time a customer clicks to your website from a Google search.

Google Adwords is a great way of getting immediate and guaranteed traffic to your website. It is a powerful tool for attracting additional visitors to your website within a short time frame, and is therefore particularly suited to newly launched websites. It also acts as a great research tool to give us data in a short space of time, on which keywords have the highest conversion rates. We then feed this knowledge back into your organic SEO strategy.

The key is to set up targeted campaigns in terms of keywords, locations, and landing pages. It is vital that your Google Adwords campaigns are properly structured and managed accordingly, otherwise you can waste a lot of money.

Here at SOZO, we can both set up and manage your Google Adwords campaigns, with an aim to maximise ROI. Adwords has a number of advantages in that it offers control over targeting and refinements, which take effect immediately.

When it is set up and managed correctly, Adwords is an incredible tool driving targeted traffic to your website. In collaboration with our organic SEO efforts, it can prove a real asset to your business' performance.";
      $benefits = array("Google commercial keywords advertising can enormously boost your revenue because with such words you are communicating on the most widely used browser directory Therefore you can drive more traffic to your online presence and attract large number of prospects to your dealing activities.
You have the flexibility to display your products and services according to your preferences like the specific countries to target, budget for publish etc.
With such a method you are paying only for the results. You are charged for clicks on ads and clicks on ads means that user lands on your website thereby getting knowledge of your products and services.
It is very beneficial for local commerce as commercials ads targeting particular regions or city can be created. Therefore it enables the user to target the audience in the shortest distance as required by the local businesses.
With online commercial keywords, budget for web advertising needs is not at all a problem as it is up to you to set budget for your campaign.");
      $features = array("crecimiento", "despreocupate", "estadisticas");
    break;

  case 'email':
      $data = get_description($service);
      $title = "";
      $desc = "";
      $h1 = "Email marketing";
      $p = "Conectate más rápido y directo con todos tus clientes y mantenete en contacto con ellos.";
      $img = "email.jpg";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = array("conexion", "economico", "eficiente", "estadisticas", "gusto");
    break;

  case 'redes-sociales':
      $title = "";
      $desc = "";
      $h1 = "Marketing de redes";
      $p = "No sigas a tu público objetivo, dejá que él te siga a vos.";
      $img = "redes.jpg";
      $description = "Our outside-of-the-box social media marketing campaigns attract and engage your target audience on Facebook, Twitter, Instagram, YouTube, LinkedIn, and several other platforms.";
      $benefits = array("");
      $features = array("crecimiento", "eficiente", "conexion", "redes", "despreocupate", "seo");
    break;

  case 'negocio':
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
      $p = "";
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
      $p = "";
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
      $p = "";
      $video = "motion-graphics.mp4";
      $description = $data['description'];
      $benefits = $data['benefits'];
      $features = null;
    break;

  default:
      header('Location: servicio?s=diseno-a-medida');
    break;
}
