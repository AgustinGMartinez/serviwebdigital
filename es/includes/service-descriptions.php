<?php

function get_description($service) {
  switch ($service) {
    case 'plantillas-web':
        $serviceData = array(
          'description' => "Nuestros diseños más reconocidos han hecho crecer las marcas de nuestros clientes al mismo tiempo que los visitantes pueden navegar sus sitios con facilidad, creando la experiencia de usuario ideal.\n\n Aprovechá nuestras plantillas únicas adaptadas a tu identidad visual, 100% pensadas para maximizar la conversión y aumentar la reputación de tu marca.",
          'benefits' => array("100% adaptadas a todos los dispositivos; computadoras, tablets y teléfonos.", "La opción más accesible sin dejar de ser un producto de primera calidad.", "Plantillas refinadas con diseños exquisitos.", "Optimizadas para buscadores.", "Apariencia única para tu identidad visual.")
        );

        return $serviceData;
      break;

    case 'diseno-a-medida':
        $serviceData = array(
          'description' => "Nuestros diseños a medida se enfocan en detalles que brindan a nuestros clientes un producto de sensación singular. La forma en que comunicás tu marca o servicio debería ser tan diferente en el mercado como tu mismo producto o servicio.\n\n Nuestro equipo de profesionales de SWD posee el talento y la experiencia para crear soluciones talladas a mano que verdaderamente reflejen tus propuestas y satisfagan tus necesidades.",
          'benefits' => array("Diseño que se destaca claramente sobre la competencia.", "Experiencia única para tus clientes que no olvidarán.", "Se ha comprobado que un diseño más atractivo se transforma en confianza y compras hacia la marca.", "Personalizado al detalle vas a poder tener tu web exactamente como siempre quisiste.", "Programación personalizada a tus necesidades.", "El cielo es el límite.")
        );

        return $serviceData;
      break;

    case 'tienda-ecommerce':
        $serviceData = array(
          'description' => "¿Sabías que el comercio electrónico ha sido una tendencia en auge durante los últimos años? Se espera que la cantidad de transacciones electrónicas supere a la del comercio tradicional en la siguiente década. ¡Este crecimiento hace poco ha llegado a manifestarse en Argentina y parece que llegó para quedarse!\n\n Si todavía no expandiste tus negocios a internet, donde la mayoría de la gente pasa gran parte de su día, ¿qué esperas? Obtené tu propia tienda online automatizada, totalmente administrable y con posibilidad de manejar rápidamente ofertas y promociones para que tus productos estén siempre en la mira.",
          'benefits' => array("Vendé 24/7 con tu tienda automatizada.", "Alcanzá a <em>miles</em> de potenciales clientes al mismo tiempo.", "Organizás todo tu negocio, logística, precios, clientes y marketing en una sola plataforma.", "Mucha más rapidez en la comunicación.", "Transacciones más rápidas", "Estadísticas detallas de tus clientes gracias a la tecnología.", "Más cómodo para tus clientes.", "Aumentás tus ventas.")
        );

        return $serviceData;
      break;

    case 'paginas-aterrizaje-landing-page':
        $serviceData = array(
          'description' => "Diseño de páginas pequeñas a bajo costo para publicidad en google y redes sociales, visualmente cautivadoras y optimizadas para el posicionamiento en los buscadores. Nuestras landing pages están pensadas para enganchar a los visitantes y convertirlos en potenciales clientes.",
          'benefits' => array("Bajo costo.", "Excelente herramienta de marketing con alta tasa de ROI.", "Diseños atractivos son la prioridad.", "Posibilidad de mejorar el posicionamiento de tu sitio web principal.", "Bajo riesgo económico.", "Ideal para promocionar productos o servicios nuevos o de tendencia.", "También ideal para ofertas.")
        );

        return $serviceData;
      break;

    case 'minisitios':
        $serviceData = array(
          'description' => "Un minisitio puede estar compuesto por 3, 2 o hasta una sola página.\n\n A menudo, los emprendimientos aplazan el lanzamiento de su primer website porque saben que el dinero, el tiempo y el esfuerzo que se necesita es significativo. (Esto aplica por igual a negocios pequeños, empresas de gran escala y compañías que anteriormente tenían sitios de terceros pre-diseñados).\n\n En virtud de que el foco de nuestra agencia recae en la continua búsqueda de mejora orientada a resultados, y no la ineficiente búsqueda de perfección, un minisitio es una estrategia alternativa que a veces ofrecemos a los clientes que han pospuesto lanzar su sitio web por años.",
          'benefits' => array("Rápido desarrollo.", "Precio acorde.", "Sitios directo al grano, orientados a objetivos.", "Solución adaptable al tamaño de tu empresa o desarrollo personal.", "Perfecto para promocionar productos o servicios nuevos.")
        );

        return $serviceData;
      break;

    default:
        return array('description' => null, 'benefits' => null);
      break;
  }
}
