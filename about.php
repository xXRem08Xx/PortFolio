<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Qui suis-je";
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
        <h1 class="text-white font-tertiary">Qui suis-je ?</h1>
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
          <p>Je suis également un grand lecteur, et mes themes de livre preferé sont :
            <ul>
              <li>Fantasy (voyage dans le temps, dans d'autre univers ...)</li>
              <li>Science-Fiction (Monde virtuel, Mythologie)</li>
              <li>Manga (y'a rien a dire de plus sur ce theme 😉)</li>
            </ul>
          </p>
          <p>
            Mes collections de livre preferé sont :
            <ul>
              <li>La guerre des clans, de Erin Hunter</li>
              <li>Les fourmis, de Bernard Werber</li>
              <li>La trilogie des Dieux, de Bernard Werber</li>
            </ul>
          </p>
          <a href="./download/Rémi_Maïssa.pdf" download>Ciquer ici pour telecharger mon Cv !</a>
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

<?php 
require_once "footer.php";
?>
</body>
</html>