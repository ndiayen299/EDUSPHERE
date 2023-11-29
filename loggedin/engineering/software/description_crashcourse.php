<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EDUSPHERE </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- links for the navbar that i've made  -->
    <link rel="stylesheet" href="../../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styleloggedin.css">
    <!-- End of the links for the navbar that i've made  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../../css/aos.css">
    <link rel="stylesheet" href="../../../css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar  js-sticky-header site-navbar-target" role="banner">
      <div class="topnav" id="myTopnav">
      <a href="../../../loggedin.php" class="active">Accueil</a>
          <?php
          if (isset($_SESSION['userId'])){
            echo '<a href="../../../loggedin/profile.php" name="profile">Profile</a>
                  <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
          }
           ?>
         </div>
      </div>

    </header>

    <div class="intro-section single-cover" id="home-section">

      <div class="slide-1 text-white" style="background-image: url('../../../images/course15.JPG');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" class="text-white">Cours intensif d'informatique</h1>
                  <p data-aos="fade-up" data-aos-delay="100" class="text-white">8 Cours / 6 semaines &bullet; 600 étudiants &bullet; <a href="#" class="text-white">2 commentaires</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <h3 class="text-black">Description du cours</h3>
              <p>En 40 épisodes, Carrie Anne Philbin vous apprend l'informatique ! Ce cours est basé sur
                matériel d'introduction de niveau collégial ainsi que les lignes directrices des principes AP Computer Science.
                A la fin de ce cours, vous serez capable de :
                *Décrivez l'histoire des ordinateurs et les décisions de conception qui nous ont donné des ordinateurs modernes
                *Décrire les éléments de base de la programmation et des logiciels
                *Identifier les composants de base du matériel informatique et ce qu'ils font
                *Décrire comment les ordinateurs sont utilisés et comment cela a évolué au fil du temps
                * Appréciez le chemin parcouru par les ordinateurs et jusqu'où ils pourraient nous mener.</p>
            </div>

            <div class="pt-5">
              <h3 class="mb-5">2 commentaires</h3>
              <ul class="comment-list">

                <li class="comment">

                  <div class="vcard bio">
                    <img src="../../../images/comment1.JPG" alt="Image placeholder">
                  </div>

                  <div class="comment-body">
                    <h3>Adama Diakhaté</h3>
                    <div class="meta">2 Octobre 2023 à 19h00</div>
                    <p>Merci, je commence tout juste à m'initier à l'informatique !</p>
                  </div>
                </li>

                <li class="comment">

                  <div class="vcard bio">
                    <img src="../../../images/comment2.JPG" alt="Image placeholder">
                  </div>

                  <div class="comment-body">
                    <h3>Kara Kandji </h3>
                    <div class="meta"> 14 Novembre 2023 à 20h</div>
                    <p>Bon contenu avec beaucoup de détails!</p>
                  </div>

                </li>
              </ul>
              <!-- END comment-list -->
            </div>

          </div>

          <div class="col-lg-4 pl-lg-5">
            <div class="mb-5 text-center border rounded course-instructor">
              <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Instructeur de cours</h3>
              <div class="mb-4 text-center">
                <img src="../../../images/crashcourse.JPEG" alt="Image" class="w-25 rounded-circle mb-3">
                <h3 class="h5 text-black mb-4">Cours intensif</h3>
                  <p>Chez Crashe Course, nous pensons que des vidéos éducatives de haute qualité devraient être disponibles pour
                    tout le monde gratuitement !
                    Abonnez-vous pour les vidéos hebdomadaires de nos cours actuels ! En ce moment, nous produisons du Bio
                    Chimie et histoire Africaine. Nous nous sommes également récemment associés à l'Arizona State University pour
                    vous propose deux autres cours : Composition de salle d'étude et Algèbre de salle d'étude.
                    L'équipe EDUSPHERE a produit plus de 32 cours sur une grande variété de sujets,
                    y compris la chimie organique, la littérature, l'histoire du monde, la biologie, la philosophie, le théâtre,
                    l'écologie, et bien d'autres encore !
                 .</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <footer class="footer-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>À propos de EDUSPHERE</h3>
            <p>Plateforme d'apprentissage en ligne riche en ressources, nous rendons l'apprentissage facile et simple pour tous.</p>
          </div>

          <div class="col-md-4">
            <h3>S'abonner</h3>
            <p>Tenez-vous informé et recevez toutes sortes d'actualités sur EDUSPHERE.</p>
            <form action="https://mailchi.mp/064deb47eeaa/lacdemy" target="_blank" class="footer-subscribe">
              <div class="d-flex mb-5">

                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est réalisé avec <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >NdeyeFatou</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="../../../js/jquery-3.3.1.min.js"></script>
  <script src="../../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../../js/jquery-ui.js"></script>
  <script src="../../../js/popper.min.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/owl.carousel.min.js"></script>
  <script src="../../../js/jquery.stellar.min.js"></script>
  <script src="../../../js/jquery.countdown.min.js"></script>
  <script src="../../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../../js/jquery.easing.1.3.js"></script>
  <script src="../../../js/aos.js"></script>
  <script src="../../../js/jquery.fancybox.min.js"></script>
  <script src="../../../js/jquery.sticky.js"></script>


  <script src="../../../js/main.js"></script>

  </body>
</html>
