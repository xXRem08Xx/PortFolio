<!DOCTYPE html>
<html lang="fr">
<?php
$title = "portfolio-details";
if (isset($_GET['idProjet']) && !empty($_GET['idProjet'])) {
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
?>

  <body>
    <?php

    if (isset($lienIframe) && isset($idDocument) && isset($titreDocument) && isset($description) && isset($date)) {

    ?>

      <?php
      include "./nav-bar.php";
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
              <p class="font-secondary mb-5">Publié le <?php echo $date ?> par<span class="text-primary"> Remi</span></p>
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



      <?php

      //on initialise un message d'erreur qui sera affiché en dessus du formulaire si il y a une erreur
      $messageError = "";
      $boolErrorForm = false;

      //si les variables du formulaire sont toutes defini dans l'url
      if (isset($_GET['mail'], $_GET['nom'], $_GET['prenom'], $_GET['idProjet'], $_GET['message'])) {
        //on recupere tous les commentaires du jour correspondant au document datant de mois  de 10 min
        $requeteInformationGlobal = 'SELECT * FROM commentaire WHERE TIMEDIFF(now(), dateHeureInsertion) < "00:10" AND numeroDocument = ' . $idDocument . ' ;';
        $resultatInformation = $pdo->query($requeteInformationGlobal);
        $resultatInformation = $resultatInformation->fetchAll();

        $messageError = "";
        //pour chaque commentaire
        foreach ($resultatInformation as $commentaire) {
          //on verifie si les champs nom et prenom ou adresse mail sont identique a ceux du formulaire
          if (($commentaire['nom'] == $_GET['nom'] && $commentaire['prenom'] == $_GET['prenom']) || $commentaire['email'] == $_GET['mail']) {
            //si oui, on sauvegarde un message d'erreur pour annoncer que on a droit qu'a un commentaire toutes les 10 mins
            $messageError =  "Attention ! Vous n'avez droit qu'à un commentaire toute les 10 minutes.";
            //si on rencontre un cas de reecriture, on definit le bool a vrai
            $boolErrorForm = true;
          }
        }
        //si on a pas rencontré de cas de reecriture, on execute la requete d'insertion
        if (!$boolErrorForm) {
          //on fait la requete preparé



          $insertionForm = $pdo->prepare("INSERT INTO `commentaire`(`message`, `nom`, `prenom`, `email`, `numeroDocument`) VALUES (:message, :nom, :prenom, :email, :numeroDocument)");
          $insertionForm->bindParam(':message', $message);
          $insertionForm->bindParam(':nom', $nom);
          $insertionForm->bindParam(':prenom', $prenom);
          $insertionForm->bindParam(':email', $email);
          $insertionForm->bindParam(':numeroDocument', $numeroDocument);

          $message = $_GET['message'];
          $nom =  $_GET['nom'];
          $prenom = $_GET['prenom'];
          $email = $_GET['mail'];
          $numeroDocument = $idDocument;

          //on fait la verif des insertions de balise < et >
          $boolMessageBaliseEntree = preg_match("#<#", $message);
          $boolMessageBaliseFermer = preg_match("#>#", $message);

          $boolNomBaliseEntree = preg_match("#<#", $nom . $prenom);
          $boolNomBaliseFermer = preg_match("#>#", $nom . $prenom);

          $boolEmailBaliseEntree = preg_match("#<#", $email);
          $boolEmailBaliseFermer = preg_match("#>#", $email);

          //on verifie si le message comporte au moins 2 caracteres
          if (strlen($message) < 2) {
            $messageError = "Attention, vous devez remplir le message avec au moins 2 caractères";
            $boolErrorForm = true;
          }
          //si on a trouver les balises dans le message
          else if ($boolMessageBaliseEntree || $boolMessageBaliseFermer) {
            $boolErrorForm = true;
            $messageError = "Attention, l'utilisation des chevrons est interdit !' est interdit ! --> Champ Message";
          }
          //si on a trouver les balises dans le nom ou le prenom
          else if ($boolNomBaliseEntree || $boolNomBaliseFermer) {
            $boolErrorForm = true;
            $messageError = "Attention, l'utilisation des chevrons est interdit ! --> Champ Nom / Prenom";
          }
          //si on a trouver les balises dans le nom ou le prenom
          else if ($boolEmailBaliseEntree || $boolEmailBaliseFermer) {
            $boolErrorForm = true;
            $messageError = "Attention, l'utilisation des chevrons est interdit ! --> Champ Mail";
          }
          //si le message comporte plus de 2 caracteres on insere
          else {
            $insertionForm->execute();
          }
        }
      }
      ?>
      <!-- Commentaire -->
      <?php

      $requeteInformationGlobal = "SELECT `numeroCommentaire`, `dateHeureInsertion`, `message`, `nom`, `prenom`, `email`, `numeroDocument` 
          FROM `commentaire` WHERE `numeroDocument` = " . $idDocument . " AND `message` != '' ORDER BY `dateHeureInsertion` desc LIMIT 6;";
      $retourCommentaire = $pdo->query($requeteInformationGlobal);
      $resultat = $retourCommentaire->fetchAll();

      ?>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h4 class="font-weight-bold mb-3">Commentaire</h4>
              <div class="bg-gray p-5 mb-4">

                <?php
                //pour chaque commentaire retourné
                foreach ($resultat as $comment) {
                  //on recup les valeurs 
                  $texteComment = $comment['message'];
                  $nomPrenomComment = $comment['prenom'] . " " . $comment['nom'];
                  $dateHeureComment = $comment['dateHeureInsertion'];

                  //on modifie l'affichage de la date
                  $format = "d/m/Y H:i:s";
                  $dateTimeComment = date_format(new DateTime($dateHeureComment), $format);

                  //fin modif affichage

                  $numImageUtilisateur = rand(1, 10);
                ?>
                  <div class="media border-bottom py-4">
                    <img src="./images/commentaire/utilisateur-<?php echo $numImageUtilisateur ?>.png" style="max-width: 50px; max-height: 50px" class="img-fluid align-self-start rounded-circle mr-3" alt="">
                    <div class="media-body">
                      <h5 class="mt-0"><?php echo $nomPrenomComment ?></h5>
                      <p><?php echo $dateTimeComment ?></p>
                      <p><?php echo $texteComment ?></p>
                    </div>
                  </div>

                <?php
                } //fin foreach retourComment
                ?>
              </div>
              <div class="mt-5">
                <h6 style="color: red;"><?php if ($boolErrorForm) echo $messageError; ?></h6>
                <h4 class="font-weight-bold mb-3 border-bottom pb-3">Laisse un commentaire</h4>

                <!-- formulaire -->
                <form action="./projet-details.php" class="row" method="get" id="formulaireCommentaire">
                  <div class="col-md-6">
                    <input type="text" class="form-control mb-3" placeholder="Prénom" name="prenom" id="prenom" maxlength="30" required>
                    <input type="text" class="form-control mb-3" placeholder="Nom" name="nom" id="nom" maxlength="30" required>
                    <input type="email" class="form-control mb-3" placeholder="Email *" name="mail" id="mail" required>
                    <input type="text" class="form-control mb-3" name="idProjet" id="idProjet" maxlength="500" value="<?php echo $idDocument ?>" hidden>
                  </div>
                  <div class="col-md-6">
                    <textarea name="message" id="message" placeholder="Message" class="form-control mb-4"></textarea required>
              <button type="submit" class="btn btn-primary w-100">Publier</button>
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
  } else {

    header("Location: error-404.php");
    exit();

?>
</body>
</html>
<?php
  }
?>