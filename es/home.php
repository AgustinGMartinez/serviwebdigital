<?php $isHome = true; ?>
<?php require('header.php'); ?>
  <main class="home">

    <section class="sec-1">
      <div class="servicios-flotantes">
        <div class="sf-1 sf row">
            <div class="ml-4 col-1">1</div>
            <div class="ml-3 line col-1"></div>
            <div class="ml-3">Diseño</div>
        </div>
        <div class="sf-2 sf row">
            <div class="ml-4 col-1">2</div>
            <div class="ml-3 line col-1"></div>
            <div class="ml-3">Marca</div>
        </div>
        <div class="sf-3 sf row">
            <div class="ml-4 col-1">3</div>
            <div class="ml-3 line col-1"></div>
            <div class="ml-3">Marketing</div>
        </div>

      </div>
      <h1>Descubre tu diseño ideal</h1>
      <h2>Agencia de diseño</h2>
      <p>Brindamos <span class="pink">soluciones gráficas</span> creativas</p>
      <p>y <span class="pink">diseño web desde $8000</span></p>

      <a href="#sec-2" class="view-more btn btn-link">Sigue viendo <br> <span class="fa fa-arrow-down"></span></a>
    </section>

    <section class="sec-2" id="sec-2">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-5">
            <img src="http://via.placeholder.com/550x450" alt="nuestra empresa" width="100%">
          </div>
          <div class="col-12 col-lg-6 description">
            <h2 class="mb-4">This is a nice title here, shall we make it longer?</h2>
            <h3 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="btn">Conócenos</a>
          </div>
        </div>
      </div>
    </section>

    <section class="sec-3">
      <div class="grid-container">
        <figure><img src="http://via.placeholder.com/500x500" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x1000" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x500" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x500" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x500" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x1000" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x500" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x500" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x500" alt=""></figure>
        <figure><img src="http://via.placeholder.com/500x500" alt=""></figure>
      </div>
    </section>

    <section class="sec-4">
      <h2>Estos clientes ya confían en nosotros</h2>
      <div class="container" id="carousel">
        <figure><img src="http://via.placeholder.com/300x150" alt="Mi Cartucho Computacion"></figure>
        <figure><img src="http://via.placeholder.com/300x150" alt="MCTecno"></figure>
        <figure><img src="http://via.placeholder.com/300x150" alt="1830 distribuidora"></figure>
        <figure><img src="http://via.placeholder.com/300x150" alt="INNAP"></figure>
        <figure><img src="http://via.placeholder.com/300x150" alt="Stefani Beauty Service"></figure>
      </div>
    </section>

    <section class="contactPage">

      <div class="container-contact100">
        <div class="wrap-contact100">
          <form class="contact100-form validate-form" method="post">
            <span class="contact100-form-title" id="contact">
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
              <div class="submitPart" style="width: 100%">
                <div class="g-recaptcha" data-sitekey="6LdyOV8UAAAAAFFp6kBN9WwqYVSOdeHvcPf-JFfd" name="google"></div>
                <button class="contact100-form-btn" id="submitContactForm">
                  Enviar mensaje
                </button>
                <button style="display: none;" class="contact100-form-btn loading" id="sendingFormSpinner">
                  <img src="../img/loader.gif" width="50px" class="mr-2" alt="cargando gif">Enviando
                </button>
              </div>
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

    </section>
  </main>

  <script type="text/javascript">
    var pageName = "home.php";
  </script>
<?php require("footer.php"); ?>
