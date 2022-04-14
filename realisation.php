<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Réalisation";
require_once "./header.php";
include_once "bdd_connexion.php";
require_once "./function.php";
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
        <h1 class="text-white font-tertiary">Réalisation</h1>
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

<!-- portfolio -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12">
        <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
          <label class="btn btn-sm btn-primary active">
            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
          </label>
          <?php
            /* Les Champs valeurs si dessous correspondent aux mot clé qui seront affiché quand on cliquera dessus dans le menu de la page */
          ?>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="C++ / Qt" />C++ / Qt
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="Php" />Php 
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="Sql" />Sql 
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="Html/Css" />Html / Css
          </label>
          <label class="btn btn-sm btn-primary">
            <input type="radio" name="shuffle-filter" value="Console Linux" />Console Linux
          </label>
        </div>
      </div>
    </div>
    <div class="row shuffle-wrapper">
    <?php
      //fonction pour afficher la liste des projets
      generationCardProjet();

      ?>

    </div>
  </div>
</section>
<!-- /projet -->


<?php 
require_once "footer.php";
?>
</body>
</html>