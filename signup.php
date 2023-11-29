<?php
  require "header.php" ;
 ?>

     <main>
        <h1>S'inscrire</h1>
        <?php
        if (isset($_GET['error'])){
          if ($_GET['error']=="emptyfields"){
            echo '<div class="alert alert-danger" role="alert">Remplissez tous les champs !</div>';
          }else if ($_GET['error']=="invalidmailuid"){
            echo '<div class="alert alert-danger" role="alert">nom utilisateur et e-mail non valides !</div>';
          }else if ($_GET['error']=="invaliduid"){
            echo '<div class="alert alert-danger" role="alert">Nom utilisateur invalide !</div>';
          }else if ($_GET['error']=="invalidmail"){
            echo '<div class="alert alert-danger" role="alert">Email invalide !</div>';
          }else if ($_GET['error']=="passwordcheck"){
            echo '<div class="alert alert-danger" role="alert">Vos mots de passe ne correspondent pas !</div>';
          }else if ($_GET['error']=="usertaken"){
            echo '<div class="alert alert-danger" role="alert">Nom utilisateur déjà pris !</div>';
          }
        }elseif (isset($_GET['signup']) ) {
          if ($_GET['signup']=="success")
            echo '<div class="alert alert-success" role="alert">Inscription réussie !</div>';
        }
         ?>
        <form action="includes/signup1.inc.php" method="post">
          <table>
            <tr>
              <th style="text-align: left;">Nom Utilisateur </th>
              <td><input type="text" name="uid" placeholder="Username"
                value="<?php if (isset($_GET['error'])){
                  if ($_GET['error']=="invalidmail" || $_GET['error']=="passwordcheck" || $_GET['error']=="emptyfields"){
                    echo  isset($_GET['uid']) ? $_GET['uid']:'';
                  }else {
                    echo '';
                  }
                }  ?>" ></td>
            </tr>
            <tr>
              <th style="text-align: left;">E-mail</th>
              <td><input type="text" name="mail" placeholder="E-mail"
                value="<?php if (isset($_GET['error'])){
                if ($_GET['error']=="invaliduid" || $_GET['error']=="passwordcheck" || $_GET['error']=="emptyfields"){
                  echo  isset($_GET['mail']) ? $_GET['mail']:'';
                }else {
                  echo '';
                }
              }  ?>"></td>
            </tr>
            <tr>
              <th style="text-align: left;">Mot de passe</th>
              <td><input type="password" name="pwd" placeholder="Password"></td>
            </tr>
            <tr>
              <th style="text-align: left;">Répéter le mot de passe</th>
              <td><input type="password" name="pwd-repeat" placeholder="Repeat Password"></td>
            </tr>
          </table>
          <br>
          <button style="border-radius: 12px;padding:11px 16px;font-weight:bolder;margin-left:250px" type="submit" name="signup-submit">S'inscrire</button>
        </form>
     </main>

 <?php
  require "footer.php";
  ?>
