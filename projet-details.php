<!DOCTYPE html>
<html lang="fr">
  <?php
  $title = "portfolio-details";
if ( isset($_GET['idProjet']) && !empty($_GET['idProjet'])) {
  $idDocument = $_GET['idProjet'];
  include "header.php";
  require_once "./bdd_connexion.php";

  $requete = "SELECT `numeroDocument`, `titreProjet`, `lien`, `dateInsertion`, `description`, `lien_publication` FROM `document` WHERE `numeroDocument` = " . $idDocument;
  $resultat = $pdo->query($requete);
  $resultat = $resultat->fetchAll();

  $lienIframe = $resultat[0]['lien_publication'];
  $titreDocument = $resultat[0]['titreProjet'];
  $description = $resultat[0]['description'];
  $date = $resultat[0]['dateInsertion'];

  if (isset($lienIframe) && isset($idDocument) && isset($titreDocument) && isset($description) && isset($date)) {

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
              <h1 class="text-white font-tertiary">Détail du Projet</h1>
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

      <!-- projet -->
      <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="font-tertiary mb-3"> <?php echo $titreDocument ?> </h3>
              <p class="font-secondary mb-5">Publié le <?php echo $date ?> par<span class="text-primary"> Remi</span class="text-primary"></p>
              <div class="content">
                <div class="row">
                  <div class="col-7" style="height: 90vh;"> <?php echo '<iframe src="' . $lienIframe . '" style="height: 100%; width: 100%"></iframe>'; ?> </div>
                  <div class="col-4">
                    <!-- texte a inserer -->
                    <div class="d-flex align-items-start bg-light mb-3" style="height: 30vh; font-size: 20px; line-height: 30px;">
                      <br>
                      <?php echo $description; ?>
                      </br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /projet -->

      <!-- Commentaire -->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h4 class="font-weight-bold mb-3">Commentaire</h4>
              <div class="bg-gray p-5 mb-4">
                <div class="media border-bottom py-4">
                  <img src="images/user-1.jpg" class="img-fluid align-self-start rounded-circle mr-3" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Carole Marvin.</h5>
                    <p>15 january 2015 At 10:30 pm</p>
                    <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                      definitionem.</p>
                  </div>
                </div>
                <div class="media py-4">
                  <img src="images/user-3.jpg" class="img-fluid align-self-start rounded-circle mr-3" alt="">
                  <div class="media-body">
                    <h5 class="mt-0">Bruce Bernier.</h5>
                    <p>15 january 2015 At 10:30 pm</p>
                    <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                      definitionem.</p>
                  </div>
                </div>
              </div>
              <div class="mt-5">
                <h4 class="font-weight-bold mb-3 border-bottom pb-3">Laisse un commentaire</h4>

                <!-- formulaire -->
                <form action="./projet-details.php" class="row" method="get">
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-3" placeholder="Prénom" name="prenom" id="prenom" required>
                    <input type="text" class="form-control mb-3" placeholder="Nom" name="nom" id="nom" required>
                    <input type="text" class="form-control mb-3" placeholder="Email *" name="mail" id="mail" required>
                    <input type="text" class="form-control mb-3" name="idProjet" id="idProjet" value="<?php echo $idDocument ?>">
                  </div>
                  <div class="col-md-6">
                    <textarea name="comment" id="message" placeholder="Message" class="form-control mb-4"></textarea required>
              <button type="submit" class="btn btn-primary w-100">Poster</button>
            </div>
          </form>
          <!-- /formulaire -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Commentaire -->

    <?php
    require_once "footer.php";
    ?>
  </body>

</html>
<?php
    //fin if isset
  }
}
else {
  
  //header("Location: error-404.php");
  //exit();

?>
</body>
</html>
<?php
}
?>