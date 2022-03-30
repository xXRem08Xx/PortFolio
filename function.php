<?php
include_once "./bdd_connexion.php";

function generationCardProjet()
{
    global $pdo;

    //recuperation des données depuis la base sql
    $requete = $pdo->query("SELECT * FROM document;");



    foreach ($requete as $doc) {

        //pour chaque doc on recupere ses mots clé associés
        $requeteSqlMotCle = "SELECT motcle.libelle as libelle FROM motcle LEFT OUTER JOIN appartient ON appartient.numeroMotCle = motcle.numeroMotCle WHERE appartient.numeroDocument = " . $doc['numeroDocument'] . "  GROUP BY libelle;";

        $requeteMotCle = $pdo->query($requeteSqlMotCle);


        $divMotCle = '<div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="';

        $nombreCleAPrevoir = $requeteMotCle->rowCount();
        $numCle = 1;

        $listMot = '[';
        foreach ($requeteMotCle as $motCle) {
            $listMot = $listMot . '&quot;' . $motCle["libelle"] . '&quot;';

            if($numCle < $nombreCleAPrevoir) {
                $listMot = $listMot . ',';
            }
            //&quot;branding&quot;]>'; 

            $numCle += 1;
        };
        $listMot = $listMot . ']">';
        $divMotCle =  $divMotCle . $listMot;

        //on prend un nombre aleatoire entre 1 et 8
        $numImage = rand(1, 8);

        $divCard = $divMotCle . '
        <div class="position-relative rounded hover-wrapper">
          <img src="images/projet/item-' . $numImage . '.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
          <div class="hover-overlay">
            <div class="hover-content">
              <h4> ' . $doc["titreProjet"] . '</h4>
              <a class="btn btn-light btn-sm" href="projet-details.php?='. $doc["numeroDocument"] .'" target=_blank >Voir le projet</a>
            </div>
          </div>
        </div>
      </div>
';
        //on affiche
        echo $divCard;

    };
};
?>