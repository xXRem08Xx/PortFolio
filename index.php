<!DOCTYPE html>
<html lang="fr">

<?php
$title = "Accueil";
include_once "header.php";
?>

<body>


  <header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand font-tertiary h3" href="index.php"><img src="images/logo.png" alt="Myself"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.php">Projet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- header page entiere -->
  <section class="hero-area bg-primary" id="parallax">
    <div class="container">
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <h1 class="text-white font-tertiary">Salut ! je suis <br> Rémi <br> Développeur</h1>
        </div>
      </div>
    </div>
    <div class="layer-bg w-100">
      <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
    </div>
    <div class="layer" id="l2">
      <img src="images/illustrations/dots-cyan.png" alt="bg-shape">
    </div>
    <div class="layer" id="l3">
      <img src="images/illustrations/leaf-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l4">
      <img src="images/illustrations/dots-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l5">
      <img src="images/illustrations/leaf-yellow.png" alt="bg-shape">
    </div>
    <div class="layer" id="l6">
      <img src="images/illustrations/leaf-cyan.png" alt="bg-shape">
    </div>
    <div class="layer" id="l7">
      <img src="images/illustrations/dots-group-orange.png" alt="bg-shape">
    </div>
    <div class="layer" id="l8">
      <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape">
    </div>
    <div class="layer" id="l9">
      <img src="images/illustrations/leaf-cyan-2.png" alt="bg-shape">
    </div>
    <!-- icone de reseau social -->
    <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-instagram"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-dribbble"></i></a></li>
      <li class="mb-3"><a class="text-white" href="https://themefisher.com/"><i class="ti-twitter"></i></a></li>
    </ul>
    <!-- /icone de reseau social -->
  </section>
  <!-- /header page entiere -->

  <!-- about -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <p class="font-secondary paragraph-lg text-dark">
            Actuellement en BTS SIO (Services informatiques aux organisations),
          </p>
          <p class="font-secondary paragraph-lg text-dark">
            je me forme pour acquerir des competences dans le domaine du Web design et de la programation Logiciel afin de pouvoir entrer dans la vie
            active au seins d'une entreprise.
          </p>
          <a href="about.php" class="btn btn-transparent">En Savoir Plus</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->
  <!-- skills -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Compétences</h2>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
              <div class="wave" data-progress="70%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Conception Web (70%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
              <div class="wave" data-progress="73%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Devellopement C++ (73%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
              <div class="wave" data-progress="70%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Maitrise SQL (70%)</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="card shadow text-center">
            <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
              <div class="wave" data-progress="15%"></div>
            </div>
            <div class="card-footer bg-white">
              <h4 class="card-title">Dévellopement JavaScript (15%)</h4>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- /skills -->

  <!-- experience -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Expérience</h2>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="images/experience/icon-1.png" alt="icon">
          <p class="mb-0">Juin 2021</p>
          <h4>Stage de 1ère Année</h4>
          <h6 class="text-light">Dignamik</h6>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="images/experience/icon-2.png" alt="icon">
          <p class="mb-0">Janvier 2021 - Fevrier 2021</p>
          <h4>Stage de 2ème Année</h4>
          <h6 class="text-light">Dignamik</h6>
        </div>
        <div class="col-lg-3 col-md-4 text-center">
          <img src="images/experience/icon-3.png" alt="icon">
          <p class="mb-0">juin 2018 - Présent</p>
          <h4>Employé polyvalent en restauration</h4>
          <h6 class="text-light">7SeptPizza</h6>
        </div>
      </div>
    </div>
  </section>
  <!-- ./experience -->

  <!-- education -->
  <section class="section position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Education</h2>
        </div>
        <div class="col-lg-6 col-md-6 mb-80">
          <div class="d-flex">
            <div class="mr-lg-5 mr-3">
              <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
            </div>
            <div>
              <p class="text-dark mb-1">2020</p>
              <h4>Baccalauréat Mention Assez Bien</h4>
              <p class="mb-0 text-light">Lycée Aristide Briand à Gap</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-80">
          <div class="d-flex">
            <div class="mr-lg-5 mr-3">
              <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
            </div>
            <div>
              <p class="text-dark mb-1">2017</p>
              <h4>Brevet Des Collèges</h4>
              <p class="mb-0 text-light">Collège Achille Mauzan à Gap</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- bg image -->
    <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
  </section>
  <!-- /education -->

  <!-- services -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Services</h2>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-palette icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Base de données.</h4>
              <p>Création, gestion et organisation de base de données, maitrise du language SQL</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card active-bg-primary hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-vector icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Web Design</h4>
              <p>Création et gestion de sites webs en accord avec les attentes du client.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card hover-shadow shadow">
            <div class="card-body text-center px-4 py-5">
              <i class="ti-panel icon mb-5 d-inline-block"></i>
              <h4 class="mb-4">Conception de Logiciel</h4>
              <p>Création de logiciel C++ pour support Ordinateur / Mobile </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /services -->

  <!-- portfolio -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">portfolio</h2>
        </div>
      </div>
      <div class="row shuffle-wrapper">
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-4.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6 mb-4 shuffle-item">
          <div class="position-relative rounded hover-wrapper">
            <img src="images/projet/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100">
            <div class="hover-overlay">
              <div class="hover-content">
                <a class="btn btn-light btn-sm" href="#!">view project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /projet -->

  <!-- testimonial -->
  <section class="section bg-primary position-relative testimonial-bg-shapes">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title text-white mb-5">Testimonials</h2>
        </div>
        <div class="col-lg-10 mx-auto testimonial-slider">
          <!-- slider-item -->
          <div class="text-center testimonial-content">
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
            <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</strong> Duis aute irure dolor in reprehenderit
              in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png" alt="client-image">
            <h4 class="text-white">Jesica Gomez</h4>
            <h6 class="text-light mb-4">CEO, Funder</h6>
          </div>
          <!-- slider-item -->
          <div class="text-center testimonial-content">
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
            <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation
                ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</strong> Duis aute irure dolor in reprehenderit in
              voluptate velit
              esse cillum dolore eu fugiat nulla pariatur.</p>
            <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png" alt="client-image">
            <h4 class="text-white">Jesica Gomez</h4>
            <h6 class="text-light mb-4">CEO, Funder</h6>
          </div>
          <!-- slider-item -->
          <div class="text-center testimonial-content">
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
            <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <strong>quis nostrud exercitation
                ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</strong> Duis aute irure dolor in reprehenderit in
              voluptate velit
              esse cillum dolore eu fugiat nulla pariatur.</p>
            <img class="img-fluid rounded-circle mb-4 d-inline-block" src="images/testimonial/client-1.png" alt="client-image">
            <h4 class="text-white">Jesica Gomez</h4>
            <h6 class="text-light mb-4">CEO, Funder</h6>
          </div>
        </div>
      </div>
    </div>
    <!-- bg shapes -->
    <img src="images/backgrounds/map.png" alt="map" class="img-fluid bg-map">
    <img src="images/illustrations/dots-group-v.png" alt="bg-shape" class="img-fluid bg-shape-1">
    <img src="images/illustrations/leaf-orange.png" alt="bg-shape" class="img-fluid bg-shape-2">
    <img src="images/illustrations/dots-group-sm.png" alt="bg-shape" class="img-fluid bg-shape-3">
    <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape" class="img-fluid bg-shape-4">
    <img src="images/illustrations/leaf-cyan.png" alt="bg-shape" class="img-fluid bg-shape-5">
  </section>
  <!-- /testimonial -->

  <!-- client logo slider -->
  <section class="section pb-0">
    <div class="container">
      <div class="client-logo-slider d-flex align-items-center">
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-1.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-2.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-3.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-4.png" alt="client-logo"></a>
        <a href="contact.php" class="text-center d-block outline-0 p-4"><img class="d-unset img-fluid" src="images/clients-logo/client-logo-5.png" alt="client-logo"></a>
      </div>
    </div>
  </section>
  <!-- /client logo slider -->

  <!-- blog -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Blogs</h2>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-3.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.php">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="blog-single.php" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-4.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.php">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="blog-single.php" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <article class="card shadow">
            <img class="rounded card-img-top" src="images/blog/post-2.jpg" alt="post-thumb">
            <div class="card-body">
              <h4 class="card-title"><a class="text-dark" href="blog-single.php">Amazon increase income 1.5 Million</a>
              </h4>
              <p class="cars-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et
                dolore magna aliqua.</p>
              <a href="blog-single.php" class="btn btn-xs btn-primary">Read More</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- /blog -->

  <!-- contact -->
  <section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="section-title">Contact Info</h2>
        </div>
        <div class="col-lg-8 mx-auto">
          <div class="bg-white rounded text-center p-5 shadow-down">
            <h4 class="mb-80">Contact Form</h4>
            <form action="#" class="row">
              <div class="col-md-6">
                <input type="text" id="name" name="name" placeholder="Full Name" class="form-control px-0 mb-4" required>
              </div>
              <div class="col-md-6">
                <input type="email" id="email" name="email" placeholder="Email Address" class="form-control px-0 mb-4" required>
              </div>
              <div class="col-12">
                <textarea name="message" id="message" class="form-control px-0 mb-4" placeholder="Type Message Here" required></textarea>
              </div>
              <div class="col-lg-6 col-10 mx-auto">
                <button class="btn btn-primary w-100">send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->

  <!-- footer -->
  <footer class="bg-dark footer-section">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 class="text-light">Email</h5>
            <p class="text-white paragraph-lg font-secondary">steve.fruits@email.com</p>
          </div>
          <div class="col-md-4">
            <h5 class="text-light">Phone</h5>
            <p class="text-white paragraph-lg font-secondary">+880 2544 658 256</p>
          </div>
          <div class="col-md-4">
            <h5 class="text-light">Address</h5>
            <p class="text-white paragraph-lg font-secondary">125/A, CA Commercial Area, California, USA</p>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top text-center border-dark py-5">
      <p class="mb-0 text-light">Copyright &copy;<script>
          var CurrentYear = new Date().getFullYear()
          document.write(CurrentYear)
        </script> Designed &amp; Developed by <a class="text-white-50" href="Themefisher">Themefisher</a></p>
    </div>
  </footer>
  <!-- /footer -->

  <!-- jQuery -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- filter -->
  <script src="plugins/shuffle/shuffle.min.js"></script>

  <!-- Main Script -->
  <script src="js/script.js"></script>

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>