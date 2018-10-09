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

    case 'aplicaciones-web':
        $serviceData = array(
          'description' => "El desarrollo de Aplicaciones Web no es un proceso sencillo. Requiere comprender la conceptualización detrás de la aplicación y el diseño, e implementar todas las funcionalidades de una manera intrínseca.\n\n Mantenemos un ojo en la Experiencia de Usuario, Google Analytics y la Consola de Búsqueda de Google (Google Webmaster Tools) desde el lanzamiento de la aplicación. Dependiendo del feedback de los usuarios de la nueva aplicación y de Google, podemos actualizar tu aplicación o sitio web y mejorar sus funcionalidades de manera continua. Nos aseguramos de que todo su contenido sea único.",
          'benefits' => array("Somos un equipo de profesionales que sabemos lo que hacemos.", "Más rentable que una aplicación nativa.", "Accesible desde cualquier dispositivo, PC, tablet, SmartPhone, etc.", "Moniteoreamos constantemente el feedback de usuario para mejorar su experiencia.", "Opciones diferentes para cada presupuesto.", "Fácilmente adaptable y personalizable.")
        );

        return $serviceData;
      break;

    case 'mantenimiento-web':
        $serviceData = array(
          'description' => "El mantenimiento de aplicaciones y sitio web es tan vital como la misma etapa de diseño y desarrollo.  Las aplicaciones y sitios web necesitan constantes chequeos y ajustes con miras a mejorar las funcionalidades técnicas, así como actualizar los sistemas, aplicaciones y software siguiendo las tendencias web modernas.\n\n Incluye: \n\n Actualizaciones de seguridad y backups. Modificación de contenido y cambio/retoque de imagenes. Corrección de errores. Administración de servidor. Soporte técnico al cliente.",
          'benefits' => array("Tu web está segura en nuestras manos; no tenés que preocuparte por hackeos ni pérdida de información.", "Cambios a petición del cliente (no incluye la adición de nuevas secciones/funcionalidades).", "Corrección de errores y problemas constantemente.", "¿No tenés quien administre el servidor? Nosotros somos expertos en la materia.", "Estamos siempre a una llamada de distancia.")
        );

        return $serviceData;
      break;

    case 'identidad-corporativa(cambiar aqui)':
        $serviceData = array(
          'description' => "", /* Memorable identity elements to captivate prospects and enhance the quality, voice and look of your organization. From concepts and ideas to an established brand that needs a refresh to fit its current goals, we bring vast experience and individual attention through a strategic creative process to develop a meaningful brand. Great design starts with purpose and goals tied to organizational vision. We guide our clients through a strategic process that produces a website that is user-centric, visually stunning and strategically driven to get results.
          How you present your entire brand identity is crucial to creating the right first impression. The importance of a good brand identity is often underestimated. Human perception still works in a very visual way. Potential customers can make up their mind about you in seconds, just by looking at your logo.

    We always start with designing your logo first. The logo design sets the tone for the rest of your brand. Once we have designed your logo, we design your stationery along with all of your online and offline marketing materials.

    Finally, we produce a set of brand guidelines detailing how your brand should be represented across all of your marketing. This ensures that all of your communications adheres to a consistent brand identity. */

          'benefits' => array()
          /* To convey your company’s message clearly
    To confirm your company’s credibility
    To connect emotionally with your target customers
    To motivate consumers to engage with you
    To encourage customer loyalty */
        );

        return $serviceData;
      break;

    case 'google-adwords':
        $serviceData = array(
          'description' => "<span class='span-h4 text-center d-block'>Necesitás más que un sitio web para tener éxito en Marketing Digital</span>
          Un sitio web es una parte esencial de tu estrategia de marketing; sin emgargo, necesitás más que una hermosa web para teneer éxito. Si estás leyendo esto, hay una gran posibilidad de que estés experimentando uno o varios de los siguientes dolores de cabeza. \n
          • Hay poco tráfico en tu sitio web
          • Querés incrementar dicho tráfico
          • Acabás de rediseñar tu página de inicio/agregaste una página de contacto/reescribiste el contenido/agregaste imágenes, pero no está incrementando el tráfico a tu web
          • Te creaste una cuenta en LinkedIn y Twitter, armaste una página en Facebook, agregaste íconos a tu website, y ¿ahora qué?
          • Hay un nuevo competidor en el rubro que está robándose nuestro tráfico web (o eso creés)
          • Son una nueva compañía, crearon un sitio web, y ¿qué más podemos hacer?
          • Creamos nuestro propio sitio web pero no parece estar funcionando
          • Mis teléfonos todavía no suenan
          \n Google Adwords o \"pago por clic\" es donde pagás a Google cada vez que un cliente entra a tu website desde el link rpomocionado en una búsqueda en Google.\n
          <span class='span-h4 text-center d-block'>¿La solución?</span>
          Google Adwords es una forma fantástica de crear tráfico inmediato y garantizado a tu sitio. Es una herramienta poderosa para atraer visitantes adicionales a tu web en un período corto de tiempo, y es, por tanto, ideal para sitios nuevos recién lanzados. Además, funciona como una gran herramienta de investigación que provee data a corto plazo sobre cuáles palabras clave tienen las mayores tasas de conversión. Después, retroalimentamos este conocimiento en tu estrategia de SEO orgánico.

          La clave yace en armar campañas con objetivos específicos en lo que respecta a palabras clave, ubicaciones y páginas de aterrizaje. Es esencial que tus campañas de Google Adwords estén adecuadamente estructuradas y gestionadas, de otra manera, podés perder un montón de dinero.

          En Serviweb Digital, hacemos ambas: planeamos tus campañas y las administramos, con miras a maximizar tu ROI (retorno de inversión). Adwords tiene cantidad de ventajas en el sentido de que ofrece control sobre los objetivos y pequeños ajustes, que surten efecto de inmediato.

          Cuando se lo planea y administra correctamente, Adwords es una herramienta increíble atrayendo público objetivo a tu sitio web. En colaboración con nuestros esfuerzos de SEO orgánico, puede demostrar ser una verdadera arma para el desempeño de tus negocios.\n",

          'benefits' => array("Publicitar a través de palabras clave comerciales en Google puede impulsar enormemente tus ganancias porque con tales palabras estás comunicando a través de la plataforma más usada por los usuarios en el mundo. Por lo tanto, podés dirigir más tráfico a tu presencia online y atraer un gran número de potenciales clientes a tus actividades comerciales.", "Tenés la flexibilidad para desplegar tus productos y servicios de acuerdo a tus preferencias como países específicos a enfocarse, distintos presupuestos, etc.", "Con tales métodos estás pagando solamente por los resultados. Se te descuenta por clics en publicidades, y eso garantiza que el usuario llega a tu página y por ende llega a conocer tus productos y servicios.", "Es muy beneficioso para el comercio local dado que se puede publicitar apuntando específicamente a regiones o localidades particulares. Por lo tanto, habilita al usuario a abordar al público más cercano al negocio local.", "Con palabras claves comerciales en Google, el presupuesto para las necesidades de Marketing Digital es para nada un problema, dado que podés fijar para las campañas cualquier suma de dinero que quieras como te sea posible.")
        );

        return $serviceData;
      break;

    case 'redes-sociales':
        $serviceData = array(
          'description' => "Nuestras campañas de marketing de redes sociales atraen y enganchan a tu público objetivo en Facebook, Twitter, Instagram, YouTube, LinkedIn, y varias otras plataformas.\n\n<span class='span-h4'>Responde a la tecnología cambiante</span>\n
          El pasiaje digital cambia seguido y seguramente tengas preocupaciones organizacionales más importantes que andar pensando en si tus clientes están en Snapchat o Instagram. Nosotros combinamos nuestra experiencia con tus idea para trazar un plan digital diseñado para que te encuentres con tus consumidores ideales.\n\n
          <span class='span-h4'>Creá verdaderos fanáticos en las redes sociales</span>\n
          Dejamos las conjeturas de lado en las redes sociales mediante construir un público leal que puede ser inducido a complir con tus objetivos. Desde manejar tus redes sociales hasta identificar tu público objetivo, nos aseguramos de que estés invirtiendo en los canales sociales donde verdaderamente están tus clientes.\n\n
          <span class='span-h4'>Asegurate de poder ser encontrado online</span>\n
          La mejor manera de ser encontrado es posicionarte en lo más alto de los resultados de búsqueda. La Optimización para Motores de Búsqueda (SEO) es la funcfación de tu éxito digital a largo plazo. Nosotros producimos resutlados tangibles para vos estando atentos a las tendencias y algoritmos que cambian permanentemente, de manera que vos no tengas que hacerlo.",

          'benefits' => array("Obtenés una fuerte presencia online para tu empresa.", "Obtenés un fuerte fundamento para tu marketing digital", "Publicidades segmentadas por zona de residencia, edad, sexo, hobbies y muchas más opciones.", "Estadísticas y rastreo de conversión que nos permitirán optimizar las campañas y proveerte información sobre quiénes compran realmente tus productos.", "Obtenés tráfico a tu web, lo cual mejora la posición en Google y asegura el éxito digital a largo plazo <em>incluso sin necesidad de invertir más</em>")
        );

        return $serviceData;
      break;

    case 'email-marketing':
        $serviceData = array(
          'description' => "<span class='span-h4'>Deleitá a tus clientes a través de emails</span>\n
          Los servicios de email marketing de nuestra agencia te ayudan a acelerar tus ciclos de venta. El objetivo del email marketing es mover a tus potenciales clientes de una etapa del embudo de ventas a la siguiente. En otras palabras, nuestra agencia enviará enmails que motiven a las personas a comprar tus productos y servicios. Nuetras agencia de email marketing diseñará newsletters atractivas para lograr que estés siempre en mente. También podemos crear \"campañs de goteo\", o secuencias de automatización de email, para enviar un flujo sistemático de emails a tus clientes de marketing. Usá nuestos servicios de email para agilizar tus ciclos de venta, ahorrar valio tiempo, y usar nuestro personal capacitado.\n
          <span class='span-h4'>¿Por qué email marketing?</span>\n
          El Email marketing no es nuevo, pero está lejos de estar muerto. Debajo hay un par de razones por las que deberías considerar los servicios de email marketing de Serviweb Digital.",
          'benefits' => array("9 mil millones de personas usan aplicaciones de email", "91% de los consumidores revisan su email todos los días", "A 86% de los consumidores les gusta recibir emails promocionales de empresas con las que hacen transacciones", "1 de cada 3 consumidres ha comprado un producto gracias a un email", "Por cada $1 dólar gastado en email marketing, el retorno de inversión promedio es de $44 dólares.", "Lo cierto es que tus consumidores revisan su email todos los días y quieren recibir email de las empresas a las que compran, pero solamente lo quieren si les estás mandando contenido de valor. Nuestra agencia de email marketing te va a ayudar a crear emails que tus clientes van a amar." )
        );

        return $serviceData;
      break;

    case 'google-mi-negocio':
        $serviceData = array(
          'description' => "<span class='span-h4'>¿Qué es el Marketing de Google Maps?</span>\n
          En pocas palabras, el Marketing de Google Maps es el proceso de tomar ventajad de las funcionalidades de Google Maps para hacer que tu negocio sea más fácil de encontrar. Aunque esto puede ser muy útil (como es de esperar) para grandes empresas, <strong>es aún más dispensable para pequeños negocios</strong>. Sin emgargo, el Marketing de Google Maps no se trata simplemente de tener más visibilidad – se trata acerca del posicionamiento, y no solamente de tu tienda. Usado correcta y estratégicamente, Google Maps puede jugar un papel importante en tu estrategia de marketing digital.

          <span class='span-h4'>¿Cuál es el sentido del Marketing de Google Maps?</span>\n
          El objetivo culminante del Marketing de Google Maps es alcanzar un posicionamiento tan alto como sea posible en las listas de resultados de negocios locales en los resultados de Google Maps en las páginas de resultados relevantes de la búsqueda de Google. Veamos qué significa esto.

          <span class='span-h4'>Resultados de Google Basados en Proximidad</span>\n
          El primer tipo de lista en Google Maps es aquella basada en tu posición física. Con el volumen de búsquedas a través de dispositivos móviles aumentando más y más, este tipo de búsquedas (y los resultados de Google maps) se están volviendo mucho más comunes. Muchos usuarios de disposivos móviles son instados a buscar negocios cerca de su posición gracias a las sugerencias de Google, especialmente cuando buscan desde su teléfono. ¡Es casi como si Google quisiera que usemos Google Maps para encontrar locales de negocios!\n\n
          <img src='../img/mi-negocio3.jpg' alt='google-mi-negocio-ejemplo'/>",

          'benefits' => array("Aparecé en las búsquedas de Google de las personas cercanas a tu local", "Transmití confianza e imagen visual a quienes encuentren tu negocio.", "Especificamos en qué áreas aparecerá tu servicio.", "Tu negocio aparece en búsquedas según su categoría.", "Optimizamos tu presentación.", "Incluimos y optimizamos imágenes para tu negocio.", "Beneficiate de las reseñas que deja la gente.")
        );

        return $serviceData;
      break;

    case 'fotografia-de-productos':
        $serviceData = array(
          'description' => "Imágenes hemosas, cautivadoras y vibrantes, y videos deslumbrantes... no son simplemente lindos de mirar; llevan tu mensaje a otro nivel. Estas herramientas estadísticamente incrementan la interacción de los consumidores con tu marca a lo largo de todas las plataformas. Sea que se usen en redes sociales, un sitio web, email, o impresora, la multimedia de alta calidad conducirá a un retorno de inversión más alto en contraste con otra multimedia. En Serviweb Digital, la fotografía y videografía son un esfuerzo creativo de equipo, asegunrándonos de que los proyectos estén artísticamente inducidos a encajar con estética visual de tu compañía a lo largo de todos tus canales de marketing. Nos asercioramos de que tu estilo de marca fluya impecable y bellamente en todos tus medios de comunicación, proveyendo así una experiencia fluida que mantiene a tus clientes volviendo por más.

          Nuestro equipo de foto y video desarrollará tu historia de marca a través de recursos visuales que gusten a tu público objetivo. Aplicamos este esfuerzo direcamente a tu producto o servicio para ayudarte a ganar nuevos clientes, así como a nutrir y comprometer a tus clientes existentes a lo largo del embudo de ventas. Todos los recursos creados por Serviwe Digital puedes ser reutilizados en otros canales o medios asosiados con tu marca. Nuestros video y fotos pueden ayudarte a crecer más allá de tus metas y lucir bien al mismo tiempo.",

          'benefits' => array("Nuestro equipo de foto y video no es solamente capaz tecnológicamente, sino también una gran fuerza creativa.", "Su objetivo es hacer de tu identidad de marca y darle vida a través de vibrantes fotos y videos que se ven increíbles y cumplen bien las metas de conversión de tu compañía.", "Creemos en hacer crecer tu marca no solo a través de nuestras estretegias basadas en los datos del canal de comunicación, sino también de trabajos creativos que gustan a tu público." ,"Lo visual marca la estrategia, y la estrategia marca lo visual. Es la perfecta simetría entre estos dos la que ayudará a que tu marca alcance nuevos horizontes y garantice de que tu historia es entendida y amada por todos los que se cruzan con ella.")
        );

        return $serviceData;
      break;

    case 'sesion-fotografica':
        $serviceData = array(
          'description' => "<h1>Dentro de muy poquito... Ya podés ir consultando ;)</h1>",

          'benefits' => array()
        );

        return $serviceData;
      break;

    case 'videos-promocionales':
        $serviceData = array(
          'description' => "<span class='span-h4'>¿Buscás una manera poderosa de comunicar el valor de tu marca, producto o servicio?</span>

          En Serviweb Digital creamos irresistibles videos promocionales para un abanico de clientes globales. Nos apasiona contar tu historia de la manera más efectiva posible, y ayudarte a alcanzar tus metas. Atraer la gente indicada a tu marca y generar potenciales clientes y ventas.

          <span class='span-h4'>Nuestra metodología probada para un contenido de video eficaz</span>

          ¿Y cuál es el gran secreto para hacer un video promocional eficaz? (<small>No se lo cuentes a nadie:</small>) Es crear contenido interesante y útil, que cautiva, conecta emocionalmente, y después transmite el mensaje principal. Eso mueve a tu público a tomar una acción efectiva. Y eso es lo que hacemos.

          Creemos en que un video debe proveer resultados. Por eso trabajamos con asociados colaborativos en vez de conformarnos con ser solo un proveedor. Nos tomamos el tiempo de ir hasta el hueso de tu marca, tus objetivos, y a quién querés influenciar.

          No es física cuántica — solo requiere pasión, experiencia y dedicación.",

          'benefits' => array("Estrategia de contenido del video", "
                              Público objetivo", "
                              Investigación de la competencia", "
                              Planes de distribución", "
                              Guiones creativos", "
                              Videos en vivo", "
                              Animación", "
                              Plantillas de video & directrices de marca",
                              "SEO de Video",
                              "Publicidad para Videos",
                              "Marketing en Redes Sociales",
                              "Optimización para Youtube")
        );

        return $serviceData;
      break;

    case 'motion-graphics':
        $serviceData = array(
          'description' => "<span class='span-h4'>¿Buscás una manera poderosa de comunicar tu marca, producto o proceso?</span>

          Serviweb Digital crea animaciones irresistibles y videos explicativos que comunican complejos mensajes rápida y sencillamente. Somos apasionados de contar tu historia de la forma más entretenida y eficaz posible, y ayudarte a alcanzar tus objetivos. Creamos animaciones que evocarán emociones en tu público objetivo y ayudamos a tu negocio a crecer.

          <span class='span-h4'>Lográ más con videos animados</span>
          Las animaciones más efectivas están fundamentadas en una estrategia de contenido y plan de distribución bien pensados. Con la ayuda de Serviweb Digital, podemos asegurarnos que los resultados de tu inversión sean maximizados.",

          'benefits' => array("Estrategia de contenido del video", "
                              Público objetivo", "
                              Investigación de la competencia", "
                              Planes de distribución", "
                              Guiones creativos", "
                              Videos en vivo", "
                              Animación", "
                              Plantillas de video & directrices de marca",
                              "SEO de Video",
                              "Publicidad para Videos",
                              "Marketing en Redes Sociales",
                              "Optimización para Youtube")
        );

        return $serviceData;
      break;

    default:
        return array('description' => '<style>h3.exception {color: #24d1cb } a, a:visited {color: black;}</style><h3 class="exception">¡Consultá directamente con nuestra oficina de diseño gráfico!</h3>
        <h4 style="text-decoration: underline !important"><a href="tel:+541122555356">+54 011 2255 5356</a></h4>', 'benefits' => null);
      break;
  }
}
