<!DOCTYPE html>
<html lang="fr">

<?php
$title = "PortFolio";
require_once "./header.php";
?>

<body>
  

<?php
  require_once "./nav-bar.php";
?>

<!-- titre de la page -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Error</h1>
      </div>
    </div>
  </div>
  <!-- image d'arriere plan -->
  <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
</section>
<!-- /titre de la page -->

<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12" style="min-height: 40vh;">
      <p style="text-align: center;">
        Error 404 : La page recherché n'est pas disponible.
      </p>
      </div>
    </div>
    <div class="row shuffle-wrapper">
    </div>
  </div>
</section>

<?php 
require_once "footer.php";
?>
</body>
</html>