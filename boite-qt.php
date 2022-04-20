<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Service Qt";
require_once "./header.php";
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
                    <h1 class="text-white font-tertiary">Service Qt</h1>
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

    <!-- section Qt -->
    <section class="section">
        <div class="container">
            <div class="row">

                <!-- tableau d'affichage Qt -->
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="onglet0" data-toggle="list" href="#introduction" role="tab" aria-controls="onglet0">Introduction</a>
                                <a class="list-group-item list-group-item-action" id="onglet1" data-toggle="list" href="#o1" role="tab" aria-controls="onglet1">Les Bases</a>
                                <a class="list-group-item list-group-item-action" id="onglet2" data-toggle="list" href="#o2" role="tab" aria-controls="onglet2">L'interface Graphique</a>
                                <a class="list-group-item list-group-item-action" id="onglet3" data-toggle="list" href="#o3" role="tab" aria-controls="onglet3">Les Événements</a>
                                <a class="list-group-item list-group-item-action" id="onglet4" data-toggle="list" href="#o4" role="tab" aria-controls="onglet4">Se connecter à une base de données</a>
                                <a class="list-group-item list-group-item-action" id="onglet5" data-toggle="list" href="#o5" role="tab" aria-controls="onglet5">Développer sur mobile</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <!-- Contenu de l'onglet introduction -->
                                <div class="tab-pane fade active show" id="introduction" role="tabpanel" aria-labelledby="onglet0">
                                    introduction
                                </div>
                                <!-- Contenu de l'onglet Les Bases -->
                                <div class="tab-pane fade" id="o1" role="tabpanel" aria-labelledby="onglet1">
                                    En cours de création !
                                </div>
                                <div class="tab-pane fade" id="o2" role="tabpanel" aria-labelledby="onglet2">
                                    En cours de création !
                                </div>
                                <div class="tab-pane fade" id="o3" role="tabpanel" aria-labelledby="onglet3">
                                    En cours de création !
                                </div>
                                <div class="tab-pane fade" id="o4" role="tabpanel" aria-labelledby="onglet4">
                                    En cours de création !
                                </div>
                                <div class="tab-pane fade" id="o5" role="tabpanel" aria-labelledby="onglet5">
                                    En cours de création !
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>



    <?php
    require_once "./footer.php";
    ?>


</body>

</html>