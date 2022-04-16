<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Contact";
include_once "header.php";
?>

<body>

  <?php
  require_once "./nav-bar.php";

  $messageError = "";
  if (isset($_GET['etat'])) {
    if ($_GET['etat'] == "false") {
      $messageError = "Attention, vous n'avez le droit qu'à un formulaire de contact toute les 10 minutes !";
    }
  }
  ?>

  <!-- titre de la page -->
  <section class="page-title bg-primary position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="text-white font-tertiary">Contacts</h1>
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

  <!-- contact -->
  <section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Contacte Moi !</h2>
        </div>
        <div class="col-lg-8 mx-auto">
          <div class="bg-white rounded text-center p-5 shadow-down">
            <h4 class="mb-80">Formulaire de Contact</h4>
            <p style="color: red;"><?= $messageError ?> </p>
            <form action="./send-mail.php" class="row" method="get">
              <div class="col-md-6">
                <input type="text" id="name" name="name" placeholder="Nom Prénom" class="form-control px-0 mb-4" maxlength="150" required>
              </div>
              <div class="col-md-6">
                <input type="email" id="email" name="email" placeholder="Adresse Mail" class="form-control px-0 mb-4" maxlength="150" required>
              </div>
              <div class="col-12">
                <textarea name="message" id="message" class="form-control px-0 mb-4" maxlength="2000" placeholder="Tape ton message ici !" required></textarea>
              </div>
              <div class="col-lg-6 col-10 mx-auto">
                <button class="btn btn-primary w-100">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->

  <?php
  require_once "footer.php";
  ?>
</body>

</html>