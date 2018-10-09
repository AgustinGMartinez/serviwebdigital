 <div class="suprafooter">
  <div class="background"></div>
  <div class="container">
    <div class="content">
      <h4>¿Qué sigue?</h4>
      <h2>Hablemos de tu proyecto</h2>
      <a href="contacto" class="button"><span>Charlemos</span> &rarr;</a>
    </div>
  </div>
 </div>

<footer class="page-footer font-small unique-color-dark">

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Serviweb Digital</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p class="mb-4">Llevando el diseño digital al próximo nivel.</p>

        <h6 class="text-uppercase font-weight-bold">Idiomas</h6>
        <hr class="deep-purple accent-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <div>
          <a class="grey-text text-lighten-3 d-inline-block mr-2" href="../es">Español</a>
          <a class="grey-text text-lighten-3 d-inline-block mb-3" href="../en">English</a>
        </div>


      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Explorar</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="home">Home</a>
        </p>
        <p>
          <a href="home#sec-2">Servicios</a>
        </p>
        <p>
          <a href="#!">Portafolio</a>
        </p>
        <p>
          <a href="home#contact">Contacto</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Recursos</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Términos de servicio</a>
        </p>
        <p>
          <a href="#!">Política de privacidad de clientes</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contacto</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <span class="fa fa-home mr-2"></span> San Martín, Buenos Aires, Argentina
        </p>
        <p>
          <span class="fa fa-envelope mr-2"></span><a href="mailto:info@serviwebdigital.com">info@serviwebdigital.com</a>
        </p>
        <p>
          <span class="fa fa-phone mr-2"></span><a href="tel:541122895991">+ 54 11 2289 - 5991</a>
        </p>



      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><p>&copy <?php echo date("Y") ?> Diseñado con <span class="fa fa-heart"></span> por <span class="cyan-text text-accent-2">Serviweb Digital</span></p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</div>
<!-- Ends wrapper -->

</body>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/functions.js"></script>
<?php if (isset($isHome)) : ?>
  <script src="../vendor/slick/slick.min.js" async defer></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" async defer></script>
<?php endif; ?>
<script src="../js/jquery.easeScroll.js"></script>
<script type="text/javascript" src="../js/main.js"></script>

<?php if (isset($ishome)) : ?>
    	<script src="../vendor/bootstrap/js/popper.js" async defer></script>
      <script src="../vendor/js/contactFormValidate.js" async defer></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" async defer></script>
    <!--===============================================================================================-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
  	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" defer></script>
  	<script>
  	  window.dataLayer = window.dataLayer || [];
  	  function gtag(){dataLayer.push(arguments);}
  	  gtag('js', new Date());

  	  gtag('config', 'UA-23581568-13');
  	</script>
  <?php endif; ?>
</html>
