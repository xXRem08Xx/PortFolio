<!DOCTYPE html>
<html lang="fr">

<?php
$title = "PortFolio";
include_once "./header.php";
include_once "./function.php";
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
        <h1 class="text-white font-tertiary">Portfolio</h1>
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
            /* Les Champs data-groups si dessous correspondent aux mots clés des cards affiché, et permettront d'afficher 
            seulement ceux qui comporte le mot qui à été choisi dans le filte */


          generationCardPortfolio();

          /*
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      */ 



   
      /*
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-6.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-8.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;,&quot;branding&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6 mb-4 shuffle-item illustration" data-groups="[&quot;illustration&quot;]">
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-7.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <a class="btn btn-light btn-sm" href="#!">view project</a>
            </div>
          </div>
        </div>
      </div>
      */ ?>

    </div>
  </div>
</section>
<!-- /projet -->


<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">steve.fruits@email.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">+880 2544 658 256</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">125/A, CA Commercial Area, California, USA</p>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">Copyright &copy;<script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script> Designed &amp; Developed by <a class="text-white-50" href="Themefisher">Themefisher</a></p>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>