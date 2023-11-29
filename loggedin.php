<?php
  require "header.php" ;
?>

<div class="slide-1" style="background-image: url('images/img1.JPG');" data-stellar-background-ratio="0.5">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item active" aria-current="page"
    style="color:white;">Accueil</li>
  </ol>
</nav>

	<div class="card-container">
		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">Informatique</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
				<li><a class="card-text" href="loggedin/engineering_software.php">Génie Logiciel</a><br></li>
			    	<li><a class="card-text" href="loggedin/computer_science_java.php">Java</a><br></li>
			    	<li><a class="card-text" href="loggedin/computer_science_c++.php">C++ </a><br></li>
			    	<li><a class="card-text" href="loggedin/computer_science_python.php">Python</a></li>
	    		</ul>
	  		</div>
		</div>

		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">Langues</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
				<li><a class="card-text" href="loggedin/language_english.php">Anglais </a><br></li>
				<li><a class="card-text" href="loggedin/language_french.php">Français</a></li>
	    			<li><a class="card-text" href="loggedin/language_arabic.php">Arabe</a><br></li>
				
	    		
	    	
	    		</ul>
	  		</div>
		</div>

		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">Gestion</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
	    			<li><a class="card-text" href="loggedin/engineering_digital.php">Marketing Digital</a><br></li>
	    			<li><a class="card-text" href="loggedin/engineering_entreprise.php">Gestion d'Entreprise </a><br></li>
	    			<li><a class="card-text" href="loggedin/engineering_logistique.php">Transport Logistique</a></li>

	    		</ul>
	  		</div>
		</div>

	</div>
	<center>
		<a href="loggedin/all_courses.php" class="mybtn2">Browse All Online Courses</a>
	</center>



  <?php
  require "footer.php";
   ?>
