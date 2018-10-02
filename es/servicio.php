<?php

require('includes/feature-properties.php');

require('includes/page-recognition.php');

require('header.php'); ?>

<main class="servicio">
  <section class="header <?php if (isset($video)) echo 'no-height'; ?>">
    <?php if (isset($img)) : ?>
      <div style="background-image: url('../img/<?php echo $img; ?>')" class="bg"></div>
    <?php elseif (isset($video)) : ?>
      <video loop muted autoplay>
        <source src="../img/videos/<?php echo $video; ?>" type="video/mp4">
      </video>
    <?php endif; ?>
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
            <p class="description"><?php echo nl2br($description); ?></p>
            <h5><span>Beneficios</span> de elegir <?php echo $h1; ?> con nosotros:</h5>
            <ul class="benefits">
              <?php if (!empty($benefits)) : foreach ($benefits as $benefit) : ?>
                <li class="benefit"><?php echo $benefit; ?></li>
              <?php endforeach; endif; ?>
            </ul>
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
