     <div class="bg-secondary suprafooter">
       <div class="container">

         <!-- Grid row-->
         <div class="row py-4 d-flex align-items-center">

           <!-- Grid column -->
           <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
             <h6 class="mb-0">¡ Conectate con nosotros en las redes sociales !</h6>
           </div>
           <!-- Grid column -->

           <!-- Grid column -->
           <div class="col-md-6 col-lg-7 text-center text-md-right">

             <!-- Facebook -->
             <a class="fb-ic">
               <i class="fab fa-facebook white-text mr-4"> </i>
             </a>
             <!--Instagram-->
             <a class="ins-ic">
               <i class="fab fa-instagram white-text mr-4"> </i>
             </a>
             <!-- whatsapp -->
             <a class="li-ic">
               <i class="fab fa-whatsapp white-text"> </i>
             </a>

           </div>
           <!-- Grid column -->

         </div>
         <!-- Grid row-->

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
        <h6 class="text-uppercase font-weight-bold">Esquemas Creativos</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p class="mb-4">Llevando el diseño web al próximo nivel.</p>

        <h6 class="text-uppercase font-weight-bold mb-4">Lenguajes</h6>
        <a class="grey-text text-lighten-3 d-inline-block mr-2" href="../es">Español</a>
        <a class="grey-text text-lighten-3 d-inline-block ml-2" href="../en">English</a>


      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Explorar</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Home</a>
        </p>
        <p>
          <a href="#!">Servicios</a>
        </p>
        <p>
          <a href="#!">Precios</a>
        </p>
        <p>
          <a href="#!">Contacto</a>
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
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-home mr-3"></i> San Martín, Buenos Aires, Argentina</p>
        <p>
          <i class="fa fa-envelope mr-3"></i> info@esquemascreativos.com</p>
        <p>
          <i class="fa fa-phone mr-3"></i> + 54 11 2289 - 5991</p>



      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><p>&copy <?php echo date("Y") ?> Web Design by <span class="cyan-text text-accent-2">Esquemas Creativos</span></p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</div>
<!-- Ends wrapper -->

</body>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<?php if (isset($isContact)) : ?>

    	<script src="../css/animsition/js/animsition.min.js"></script>

    	<script src="../css/bootstrap/js/popper.js"></script>

    	<script src="../css/select2/select2.min.js"></script>
    	<script>
    		$(".selection-2").select2({
    			minimumResultsForSearch: 20,
    			dropdownParent: $('#dropDownSelect1')
    		});
    	</script>

    <!--===============================================================================================-->
    	<script src="../css/daterangepicker/moment.min.js"></script>
    	<script src="../css/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    	<script src="../js/countdowntime.js"></script>
      <script src="../js/contactFormValidate.js"></script>
    <!--===============================================================================================-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
  	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  	<script>
  	  window.dataLayer = window.dataLayer || [];
  	  function gtag(){dataLayer.push(arguments);}
  	  gtag('js', new Date());

  	  gtag('config', 'UA-23581568-13');
  	</script>
  <?php endif; ?>
</html>
