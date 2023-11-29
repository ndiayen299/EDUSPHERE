<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../../computer_science/java/accordionstyle.css">
<link rel="stylesheet" href="../../../style.css">
<title>Bienvenue à EDUSPHERE</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../../../loggedin.php" class="active">Accueil</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="../../profile.php" name="profile">Profile</a>
               <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Accueil</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering.php" style="color:white;">Ingénierie</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_software.php" style="color:white;">Génie logiciel</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Cours intensifs d'informatique</li>

  </ol>
</nav>
<!-- the actual content of this course ( Computer Science Crash Course )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Chapitre 1 Introduction
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=0">&#10170 Aperçu du cours intensif d'informatique</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Chapitre 2 : Les mécanismes du fonctionnement des ordinateurs
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=1">&#10170  Informatique précoce : cours intensif d'informatique #1</a><br>
        <a href="actualvideocontent_crashcourse.php?video=2">&#10170  Informatique électronique : cours intensif d'informatique #2</a><br>
        <a href="actualvideocontent_crashcourse.php?video=3">&#10170  Logique booléenne et portes logiques : cours intensif d'informatique #3</a><br>
        <a href="actualvideocontent_crashcourse.php?video=4">&#10170  Binaire - Représentation de chiffres et de lettres : cours intensif d'informatique # 4</a><br>
        <a href="actualvideocontent_crashcourse.php?video=5">&#10170  Comment les ordinateurs calculent - l'ALU : Cours accéléré d'informatique #5</a><br>
        <a href="actualvideocontent_crashcourse.php?video=6">&#10170  Registres et RAM : Cours intensif d'informatique #6</a><br>
        <a href="actualvideocontent_crashcourse.php?video=7">&#10170  Unité centrale de traitement (CPU) : Cours accéléré d'informatique#7</a><br>
        <a href="actualvideocontent_crashcourse.php?video=8">&#10170  Instructions et programmes : cours intensif d'informatique #8</a><br>
        <a href="actualvideocontent_crashcourse.php?video=9">&#10170  Conceptions de processeurs avancées : cours intensif d'informatique #9</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Chapitre 3 : Les bases de la programmation et des logiciels
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=10">&#10170  Programmation précoce : cours intensif d'informatique #10</a><br>
        <a href="actualvideocontent_crashcourse.php?video=11">&#10170  Les premiers langages de programmation : cours intensif d'informatique #11</a><br>
        <a href="actualvideocontent_crashcourse.php?video=12">&#10170  Bases de la programmation : instructions et fonctions : cours intensif d'informatique #12</a><br>
        <a href="actualvideocontent_crashcourse.php?video=13">&#10170  Introduction aux algorithmes : cours intensif d'informatique #13</a><br>
        <a href="actualvideocontent_crashcourse.php?video=14">&#10170  Structures de données : cours intensif d'informatique #14</a><br>
        <a href="actualvideocontent_crashcourse.php?video=15">&#10170  Alan Turing : cours intensif d'informatique #15</a><br>
        <a href="actualvideocontent_crashcourse.php?video=16">&#10170  Génie logiciel : cours intensif d'informatique #16</a><br>
        </div>
    </div>
  </div>
  <!-- Détails  chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Computer Hardware
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=17">&#10170  Circuits intégrés et loi de Moore : cours intensif d'informatique #17</a><br>
        <a href="actualvideocontent_crashcourse.php?video=18">&#10170  Systèmes d'exploitation : cours intensif d'informatique #18</a><br>
        <a href="actualvideocontent_crashcourse.php?video=19">&#10170  Mémoire et stockage : cours intensif d'informatique #19</a><br>
        <a href="actualvideocontent_crashcourse.php?video=20">&#10170  Fichiers et systèmes de fichiers : cours intensif d'informatique #20</a><br>
        <a href="actualvideocontent_crashcourse.php?video=21">&#10170  Compression : Cours intensif d'informatique #21</a><br>
        <a href="actualvideocontent_crashcourse.php?video=22">&#10170  Claviers et interfaces de ligne de commande : cours intensif d'informatique #22</a><br>
        <a href="actualvideocontent_crashcourse.php?video=23">&#10170  Écrans et graphiques 2D : cours intensif d'informatique#23</a><br>
      </div>
    </div>
  </div>
  <!-- Détails  chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Chapitre 5 : L'essor des ordinateurs personnels et des graphiques
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=24">&#10170  La guerre froide et le consumérisme : cours intensif d'informatique #24</a><br>
        <a href="actualvideocontent_crashcourse.php?video=25">&#10170  La révolution de l'ordinateur personnel : cours intensif d'informatique #25</a><br>
        <a href="actualvideocontent_crashcourse.php?video=26">&#10170  Interfaces utilisateur graphiques : cours intensif d'informatique #26</a><br>
        <a href="actualvideocontent_crashcourse.php?video=27">&#10170  Graphisme 3D : Cours intensif d'informatique #27</a><br>
      </div>
    </div>
  </div>
  <!-- Détails  chapitre 6 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
           Chapter 6 : The Internet
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=28">&#10170  Réseaux informatiques : cours intensif d'informatique #28</a><br>
        <a href="actualvideocontent_crashcourse.php?video=29">&#10170  Internet : cours intensif d'informatique #29</a><br>
        <a href="actualvideocontent_crashcourse.php?video=30">&#10170  Le World Wide Web : cours intensif d'informatique #30</a><br>
        <a href="actualvideocontent_crashcourse.php?video=31">&#10170  Cybersécurité : cours intensif d'informatique #31</a><br>
        <a href="actualvideocontent_crashcourse.php?video=32">&#10170  Informatiques et cyberattaques : cours intensif d'informatiqueks: Crash Course Computer Science #32</a><br>
        <a href="actualvideocontent_crashcourse.php?video=33">&#10170  Cryptographie : cours intensif d'informatique #33</a><br>
      </div>
    </div>
  </div>
  <!-- Détails  chapitre 7 -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
           Chapter 7 : Artificial Intelligence
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=34">&#10170  Apprentissage automatique et intelligence artificielle : cours intensif d'informatique #34</a><br>
        <a href="actualvideocontent_crashcourse.php?video=35">&#10170  Vision par ordinateur : cours intensif d'informatique #35</a><br>
        <a href="actualvideocontent_crashcourse.php?video=36">&#10170  Traitement du langage naturel : cours intensif d'informatique #36</a><br>
        <a href="actualvideocontent_crashcourse.php?video=37">&#10170  Robots : cours intensif d'informatique #37</a><br>
      </div>
    </div>
  </div>
  <!-- Détails  chapitre 8 -->
  <div class="card">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Chapitre 8 : Les humains et l'avenir de l'informatique
        </button>
      </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=38">&#10170  Psychologie de l'informatique : cours intensif d'informatique #38</a><br>
        <a href="actualvideocontent_crashcourse.php?video=39">&#10170  Technologie éducative : cours intensif d'informatique #39</a><br>
        <a href="actualvideocontent_crashcourse.php?video=40">&#10170  La singularité, Skynet et l'avenir de l'informatique : cours intensif d'informatique #40</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
