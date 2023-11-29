<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EDUSPHERE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

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


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php"> <img src="./images/LOGO.png" class='logo' alt="" srcset=""> </a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Accueil</a></li>
                <li><a href="#courses-section" class="nav-link">Formations</a></li>
                <li><a href="#programs-section" class="nav-link">Cours</a></li>
                <li><a href="#teachers-section" class="nav-link">Notre Equipe</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contactez-nous</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="sign">
                <!--sign-->
                <div class="container <?php echo (isset($_GET['errorp']) || isset($_GET['signup']))? 'right-panel-active':''; ?>" id="container">
                  <div class="form-container sign-up-container">
                    <form action="includes/signup1.inc.php" method="post" id="signup_form">
                      <h1 class="title">Sign Up</h1>
                      <br>
                      <?php
                      if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=="emptyfields"){
                          echo '<div style="color:red;">Remplissez tous les champs !</div>';
                        }else if ($_GET['errorp']=="invalidmailuid"){
                          echo '<div style="color:red;">Nom utilisateur et e-mail invalides !</div>';
                        }else if ($_GET['errorp']=="invaliduid"){
                          echo '<div style="color:red;">Nom utilisateur invalide !</div>';
                        }else if ($_GET['errorp']=="invalidmail"){
                          echo '<div style="color:red;">Email invalide!</div>';
                        }else if ($_GET['errorp']=="passwordcheck"){
                          echo '<div style="color:red;">Les mots de passe ne correspondent pas!</div>';
                        }else if ($_GET['errorp']=="usertaken"){
                          echo '<div style="color:red;">Nom utilisateur déjà pris!</div>';
                        }
                      }elseif (isset($_GET['signup']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Inscription réussie ! N hésitez pas à vous connecter!</div>';
                      }
                       ?>
                      <div id="error_signup_name"></div>
                      <input type="text" id="name_signup" name="uid" placeholder="Name" value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invalidmail' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields'){
                          echo  isset($_GET['uid']) ? $_GET['uid']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_email"></div>
                      <input type="email" id="mail_signup" name="mail" placeholder="E-mail"
                        value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invaliduid' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields' || $_GET['errorp']=='usertaken'){
                          echo  isset($_GET['mail']) ? $_GET['mail']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_pwd1"></div>
                      <input type="password" id="pwd1_signup" name="pwd" placeholder="Password" />
                      <div id="error_signup_pwd2"></div>
                      <input type="password" id="pwd2_signup" name="pwd-repeat" placeholder="Repeat Password" />
                      <button>S'inscrire</button>
                    </form>

                  </div>
                  <div class="form-container sign-in-container">
                    <form action="includes/login.inc.php" method="post" id="signin_form">
                      <h1 class="title">Se connecter</h1>
                      <br>
                      <?php
                      if (isset($_GET['error'])){
                        if ($_GET['error']=="emptyfields"){
                          echo '<div style="color:red;">Remplissez tous les champs!</div>';
                        }else if ($_GET['error']=="wrongpwd"){
                          echo '<div style="color:red;">Mauvais mot de passe!</div>';
                        }else if ($_GET['error']=="nomatch"){
                          echo '<div style="color:red;"> Il a  aucune correspondance pour votre email !</div>';

                      }elseif (isset($_GET['login']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Connexion réussie !</div>';
                      }
                  }?>
                      <div id="error_signin_mail"></div>
                      <input type="email" id="mailsignin" placeholder="Email" name="mailuid" placeholder="Username/E-mail"
                        value="<?php if (isset($_GET['error'])){
                                        if ($_GET['error']=="wrongpwd" || $_GET['error']=="emptyfields"){
                                              echo  isset($_GET['mail'])?$_GET['mail']:'';
                                        }else {
                                              echo '';
                                             }
                    }  ?>" />
                      <div id="error_signin_pwd"></div>
                      <input type="password" id="pwdsignin" name="pwd" placeholder="Password" />
                      <a href="mail_input.php">Mot de passe oublié ?</a>
                      <button>Se connecter</button>
                    </form>
                  </div>
                  <div class="overlay-container">
                    <div class="overlay">
                    <div id="overlay-left" class="overlay-panel overlay-left">
                          <h1>Content de te revoir!</h1>
                          <p>Pour rester en contact avec nous, veuillez vous connecter avec vos informations personnelles</p>
                          <button class="ghost" id="signIn">Se connecter</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                          <h1>Bonjour, Apprenant !</h1>
                          <p>Entrez vos informations personnelles et commencez votre voyage avec nous.</p>
                          <button class="ghost" id="signUp">S'inscrire</button>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            <!--end-->
          </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Formations</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img1.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"></span>
                <div class="meta"><span class="icon-clock-o"></span>5 cours / 4 semaines</div>
                <h3><a href="#">Anglais</a></h3>
                <p>Apprenez l'anglais pour réussir dans tous les domaines. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2 193 étudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 4</div>
              </div>
            </div>
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img2.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"></span>
                <div class="meta"><span class="icon-clock-o"></span>20 cours / 4 semaines</div>
                <h3><a href="#">Gestion d'Entreprise</a></h3>
                <p>Découvrez le monde de l'entreprise et la coordination stratégique des activités </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2 100 étudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 9</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img4.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"></span>
                <div class="meta"><span class="icon-clock-o"></span>4 cours / 12 semaines</div>
                <h3><a href="#">Marketing Digital</a></h3>
                <p>Apprenez les bases en Marketing et Brading. </p>
              </div> 
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 3 193 étudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 3</div>
              </div>
            </div>



            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img_4.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"></span>
                <div class="meta"><span class="icon-clock-o"></span>3 cours / 9 semaines</div>
                <h3><a href="#">Génie Logiciel</a></h3>
                <p>Apprenez les langages de programmation les plus célèbres. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 1 123 étudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 8</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img_5.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"></span>
                <div class="meta"><span class="icon-clock-o"></span>2 cours / 5 semaines</div>
                <h3><a href="#">Transport Logistique</a></h3>
                <p>Apprenez les bases du Transit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span>1 523 étudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 6</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img_6.JPG" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"></span>
                <div class="meta"><span class="icon-clock-o"></span>5 cours / 7 semaines</div>
                <h3><a href="#">Réseaux</a></h3>
                <p>Découvrez les infrastructures interconnectées qui permettent le partage des ressources. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2 453 étudiants</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 5</div>
              </div>
            </div>

          </div>



        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Précédent</button>
            <button class="customNextBtn btn btn-primary m-1">Suivant</button>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Nos Formations</h2>
            <p>Apprenez à Votre Rythme.
Découvrez des cours adaptés à vos intérêts et progressez à votre propre allure. Etudiez n'importe quel sujet, à tout moment du jamais vu !</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/person.JPG" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Des formations à standars Internationaux</h2>
            <p class="mb-4">L'éducation est un art et nous sommes les artistes.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2 931 diplômés annuels</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">50 universités dans le monde</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            
            <img src="images/person20.JPG" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Visez l’excellence</h2>
            <p class="mb-4">Notre objectif est votre réussite.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2 931 diplômés annuels</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">50 universités dans le monde</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/person22.JPG" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Le Meilleur plan pour votre Avenir</h2>
            <p class="mb-4">Le début d’un voyage d’apprentissage sans fin.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2 931 diplômés annuels</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">50 universités dans le monde</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Notre Equipe</h2>
            <p class="mb-5">Le meilleur que nous promettons, le meilleur que nous sommes!</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/person_1.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Ndeye Fatou Ndiaye</h3>
                <p class="position">PDG</p>
                <p> Devellopeur Junior ,professeuse avec des années d'expérience à plus de 500 étudiants.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/person_2.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Pierre Kouane</h3>
                <p class="position">Professeur d'IA</p>
                <p>Plus de 20 ans d'expérience dans l'enseignement Supérieure J'ai travaillé dans de nombreuses universités.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/person_3.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Mohamed Gana Samb</h3>
                <p class="position">Expert Comptable</p>
                <p>Expert de premier plan dans le domaine de la Finance, a enseigné à de nombreux étudiants au fil des ans.
</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Kheuzita Ndiaye</h3>
            <blockquote>
              <p>&ldquo; J'avais des difficultés avec mes études mais tout a changé lorsque j'ai découvert EDUSPHERE, je suis maintenant un ingénieur logiciel senior avec un salaire à 6 chiffres par an. Ce site Web change vraiment la donne.
 &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Pourquoi nous choisir ?</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">2 931 diplômés annuels</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">50 universités dans le monde</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Les meilleurs professionnels du monde</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Développez vos connaissances</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Meilleurs cours d'enseignement en ligne
</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Meilleurs professeurs</h3></div>
              </div>

            </div>


          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="images/person_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">

            <h2 class="section-title mb-3">Contactez-nous</h2>
            <p class="mb-5">Nous sommes plus qu’heureux de recevoir vos suggestions.</p>
            <!-- Beginning of the php for the contact form -->
            <?php
            // Message Vars
            $msg = '';
            $msgClass = '';

            // Check For Submit
            if(filter_has_var(INPUT_POST, 'soumettre')){
              // Get Form Data
              $name = htmlspecialchars($_POST['Nom']);
              $email = htmlspecialchars($_POST['E-mail']);
              $message = htmlspecialchars($_POST['message']);
              $subject = htmlspecialchars($_POST['Prénom']);

              // Check Required Fields
              if(!empty($email) && !empty($name) && !empty($message) && !empty($subject)){
                // Passed
                // Check Email
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                  // Failed
                  $msg = 'Veuillez utiliser un email valide';
                  $msgClass = 'alerte-danger';
                } else {
                  // Passed
                  $toEmail = 'support@edusphere.com';
                  $body = $subject.'<h4>Nom</h4><p>'.$name.'</p>
                    <h4>E-mail</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';

                  // Email Headers
                  $headers = "MIME-Version: 1.0" ."\r\n";
                  $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                  // Additional Headers
                  $headers .= "From: " .$name. "<".$email.">". "\r\n";

                  if(mail($toEmail, $subject, $body, $headers)){
                    // Email Sent
                    $msg = 'Votre e mail a été envoyé';
                    $msgClass = 'alerte-succès';
                  } else {
                    // Failed
            $msg = 'Votre email n ’a pas été envoyé ';
                    $msgClass = 'alerte-danger';
                  }
                }
              } else {
                // Failed
                $msg = 'Merci de remplir tous les champs';
                $msgClass = 'alerte-danger';
              }
            }
             ?>
             <?php if($msg != ''): ?>
                 <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
               <?php endif; ?>
            <!-- End of the php for the contact form -->
            <form method="post" action="index.php#contact-section" data-aos="fade" id="contact_form">
              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_fullname"></div>
                  <input type="text" name="name" id="contact_fullname" class="form-control" placeholder="Nom complet" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_subject"></div>
                  <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Objet" >
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_email"></div>
                  <input type="email" id="contact_email" name="email"  class="form-control" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_contact_message"></div>
                  <textarea class="form-control" id="contact_message" name="message" cols="30" rows="10" placeholder="Ecriver votre message ici."><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <input type="submit" name="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Envoyer">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>À propos de Edusphére</h3>
            <p>Nous sommes une équipe passionnée dédiée à offrir une expérience d'apprentissage en ligne exceptionnelle. Notre objectif est de rendre l'éducation accessible à tous.Nous croyons fermement en l'autonomie de l'apprenant, c'est pourquoi notre plateforme offre la liberté d'explorer et d'étudier à son propre rythme ,vous à nous pour repousser les limites de votre savoir et réaliser vos aspirations académiques et professionnelles.

</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Liens</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section" class="nav-link">Accueil</a></li>
              <li><a href="#courses-section" class="nav-link">Formations</a></li>
              <li><a href="#programs-section" class="nav-link">Cours</a></li>
              <li><a href="#teachers-section" class="nav-link">Equipe</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>S'abonner</h3>
            <p>Tenez-vous informé et recevez toutes sortes d'actualités sur Edusphére.</p>
            <form action="https://mailchi.mp/064deb47eeaa/lacdemy" target="_blank" class="footer-subscribe">
              <div class="d-flex mb-5">

                <input type="submit" class="btn btn-primary rounded-0" value="S'abonner">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

  </body>
</html>
