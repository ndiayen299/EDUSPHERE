<?php
  session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
 integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="stylesheet" href="styleloggedin.css">

 <title>Bienvenue Chez EDUSPHERE</title>
 </head>
  <body>
    <div class="topnav" id="myTopnav">
    <a href="loggedin.php" class="active">Accueil</a>
        <?php
        if (isset($_SESSION['userId'])){
          echo '<a href="loggedin/profile.php" name="profile">Profil</a>
                <a href="includes/logout.inc.php" name="logout-submit">SE DÉCONNECTER</a>';
        }else{
          echo '<a href="#aboutus">À PROPOS DE NOUS</a>
          <a href="#contact">CONTACT</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>

     
            <a href="signup.php">S’INSCRIRE</a>';
          echo '<a href="signin.php">SE CONNECTER</a>';
        }
         ?>

       </div>

  </header>
