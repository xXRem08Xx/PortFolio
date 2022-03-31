<!DOCTYPE html>
<html lang="fr">

<?php
$title = "A Propos de moi";
include_once "header.php";
?>

<body>
  
<?php
  require_once "./nav-bar.php";
?>

<!-- titre de la page -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-white font-tertiary">A Propos de Moi</h1>
      </div>
    </div>
  </div>
  <!-- image d'arriere plan -->
  <img src="images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6">
</section>
<!-- /titre de la page -->

<!-- about -->
<section class="section pt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>Étudiant en BTS SIO 🤓, je me forme pour acquérir des compétences dans le domaine du Web design et de la programmation 
          Logiciel 🖥️ afin de pouvoir entrer dans la vie active.</p>
          <p>Passionné par l'intelligence artificiel 😍 et les jeux vidéo 🎮, je souhaite m'orienter dans un domaine permettant de regrouper et de pratiquer les 2 activités. 💪</p>
          <p></p>
      </div>
      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="images/about/author.jpg" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
        <!-- lien d'image si on veux rajouter la signature 
        <img src="images/about/signature.png" alt="signature" class="img-fluid">  -->
        <h4>Rémi Maïssa</h4>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- Work Process -->
<!--
<section class="section">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Work Process</h2>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <div class="">
          <img src="images/icons/plan.png" class="mb-4" alt="icon">
          <h4 class="mb-4">Research and Plan</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <img src="images/icons/design.png" class="mb-4" alt="icon">
        <h4 class="mb-4">Design and Develop</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.</p>
      </div>
      <div class="col-lg-3 col-md-4 text-center hover-shadow pt-3">
        <img src="images/icons/print.png" class="mb-4" alt="icon">
        <h4 class="mb-4">Deliver</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</section> 
-->
<!-- ./Work Process -->

<!-- team -->
<!--
<section class="section bg-cover" data-background="images/backgrounds/team-bg.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">My Team</h2>
      </div>
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="card text-center">
          <img src="images/team/member-1.png" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">Jack Schenziwe</h4>
            <p class="text-light font-secondary">Project Manager</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="card text-center">
          <img src="images/team/member-2.png" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">Jack Schenziwe</h4>
            <p class="text-light font-secondary">Project Manager</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="card text-center">
          <img src="images/team/member-3.png" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">Jack Schenziwe</h4>
            <p class="text-light font-secondary">Project Manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!-- /team -->

<!-- clients -->
<!--
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">My Clients</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="client-logo-slider d-flex align-items-center">
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
          <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid"
              src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!-- /clients -->

<?php 
require_once "footer.php";
?>
</body>
</html>