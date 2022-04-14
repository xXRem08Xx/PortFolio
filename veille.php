<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Veille informatique";
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
                    <h1 class="text-white font-tertiary">Veille informatique</h1>
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


    <section class="section">
        <div class="container">
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-db2032f1-34d9-4629-a495-cae5eb82f4f0"></div>
        </div>
    </section>

    <?php
    require_once "./footer.php";
    ?>


</body>

</html>