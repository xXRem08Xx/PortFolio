<?php
include_once "./bdd_connexion.php";

function generationCardPortfolio()
{
    global $pdo;

    //recuperation des données depuis la base sql
    $requete = $pdo->query("SELECT * FROM document;");



    foreach ($requete as $doc) {

        //pour chaque doc on recupere ses mots clé associés
        $requeteSqlMotCle = "SELECT motcle.libelle as libelle, COUNT(*) FROM motcle LEFT OUTER JOIN appartient ON appartient.numeroMotCle = motcle.numeroMotCle WHERE appartient.numeroDocument = " + $doc['numeroDocument'] + "  GROUP BY libelle;";

        echo $requeteSqlMotCle;

        $requeteMotCle = $pdo->query($requeteSqlMotCle);


        $divMotCle = '<div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="';

        $nombreCleAPrevoir = $requeteMotCle->rowCount();
        $numCle = 1;

        $listMot = '[';
        foreach ($requeteMotCle as $motCle) {
            $listMot += '&quot;' . $motCle["libelle"] . '&quot;';

            if($numCle < $nombreCleAPrevoir) {
                $listMot += ',';
            }
            //&quot;branding&quot;]>'; 

            $numCle++;
        };
        $listMot += ']>';
        /*
?>
        <!-- <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]"> -->

        <div class="position-relative rounded hover-wrapper">
            <img src="images/portfolio/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
            <div class="hover-overlay">
                <div class="hover-content">
                    <a class="btn btn-light btn-sm" href="#!">view project</a>
                </div>
            </div>
        </div>
        </div>

<?php
        */
    };
};
?>