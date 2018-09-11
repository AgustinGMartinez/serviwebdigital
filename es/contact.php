<?php $isContact = true; ?>
<?php require('header.php'); ?>
  <main class="contactPage">
    <!-- <section class="contactForm container">

      <h1 class="center">¡ Charlemos para ver qué podemos hacer por ti !</h1>

      <div class="row container">

        <form class="col s12 white" action="../mail.php" method="post">
          <div class="row">
            <div class="input-field col s12 m6">
              <input id="first_name" type="text" class="validate formInput" required name="name">
              <label for="first_name">Nombre</label>
            </div>
            <div class="input-field col s12 m6">
              <input id="email" type="email" class="validate formInput" required name="email">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6">
              <input id="phone" type="text" class="validate formInput" name="phone">
              <label for="phone">Teléfono</label>
            </div>
            <div class="input-field col s12 m6">
              <select name="subject">
                <option value="Quiero contratar sus servicios" <?php if(!isset($_GET['selected'])) echo "selected"; ?> required>Quiero contratar sus servicios</option>
                <option value="Paquete 1" <?php if(isset($_GET['selected']) && $_GET['selected'] == 1) echo "selected"; ?>>Quiero el paquete "Estándar"</option>
                <option value="Paquete 2" <?php if(isset($_GET['selected']) && $_GET['selected'] == 2) echo "selected"; ?>>Quiero el paquete "Estrella"</option>
                <option value="Paquete 3" <?php if(isset($_GET['selected']) && $_GET['selected'] == 3) echo "selected"; ?>>Quiero el paquete "Tienda"</option>
                <option value="Otro">Quiero otro servicio web con ustedes</option>
                <option value="No estoy seguro">No estoy seguro</option>
              </select>
              <label>¿Qué quieres consultar?</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="message" class="materialize-textarea" data-length="1200" required name="message"></textarea>
              <label for="message">Cuéntanos un poco</label>
            </div>
          </div>
          <div class="row">
            <div class="g-recaptcha col offset-s1 s5" data-sitekey="6LdyOV8UAAAAAFFp6kBN9WwqYVSOdeHvcPf-JFfd" name="google"></div>
            <button class="btn waves-effect waves-light red white-text col offset-s2 s3" type="submit" name="action">Enviar</button>
          </div>

          <input type="hidden" name="leng" value="es">

    </form>

  </div> -->

  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" method="post">
        <span class="contact100-form-title">
          ¡ Charlemos para ver qué podemos hacer por ti !
        </span>

        <label class="label-input100" for="first-name">Dinos tu nombre *</label>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Escribe tu nomre">
          <input id="first-name" class="input100" type="text" name="first-name" placeholder="Nombre">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs2-wrap-input100" data-validate="Escribe tu apellido">
          <input id="last-name" class="input100" type="text" name="last-name" placeholder="Apellido (opcional)">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="email">Pon tu email *</label>
        <div class="wrap-input100 validate-input" data-validate = "Se require un mail válido: ej@abc.com">
          <input id="email" class="input100" type="text" name="email" placeholder="ejemplo@email.com">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="phone">Número telefónico</label>
        <div class="wrap-input100">
          <input id="phone" class="input100" type="text" name="phone" placeholder="Ej. +51 11 1234 5678">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="message">Mensaje *</label>
        <div class="wrap-input100 validate-input" data-validate = "Mensaje es obligarorio">
          <textarea id="message" class="input100" name="message" placeholder="Cuéntanos qué te trae por aquí"></textarea>
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn" id="submitContactForm">
            Enviar mensaje
          </button>
          <button style="display: none;" class="contact100-form-btn" id="sendingFormSpinner">
            <img src="../img/loader.gif" width="50px" class="mr-2" alt="cargando gif">Enviando
          </button>
          <div class="g-recaptcha col s4" data-sitekey="6LdyOV8UAAAAAFFp6kBN9WwqYVSOdeHvcPf-JFfd" name="google"></div>
        </div>
        <input type="hidden" name="leng" value="es" id="lang">
      </form>

      <div class="contact100-more flex-col-c-m" style="background-image: url('../img/bg-01.jpg');">
        <div class="flex-w size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-map-marker"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Dirección
            </span>

            <span class="txt2">
              San Martín, Partido de San Martín, Buenos Aires, Argentina, CP 1650
            </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-phone-handset"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Hablemos
            </span>

            <span class="txt3">
              +54 11 2289 5991
            </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-envelope"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Asesoramiento general
            </span>

            <span class="txt3">
              info@esquemascreativos.com
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  </main>

  <script type="text/javascript">
    var pageName = "contact.php";
  </script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php require("footer.php"); ?>
