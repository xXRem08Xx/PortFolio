<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Developpement Sql";
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
                    <h1 class="text-white font-tertiary">Sql</h1>
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
            <div class="row" style="min-height: 900px;">

            <iframe style="height: 100%; width: 100%;min-height: 1000px;" src="./download/cours-sql.pdf"></iframe>
            
            </div>
        </div>
    </section>

    <?php
    require_once "./footer.php";
    ?>


</body>

</html>