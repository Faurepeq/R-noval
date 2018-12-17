<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="Avis.vue.css">
  <head>
    <meta charset="utf-8">
    <title>Rénoval</title>
  </head>
  <body>

    <!--Navigateur-->
    <nav>
      <div class="logo">
        <a href="../vue/Page_Acceuil.vue.php">Rénoval</a>
      </div>
      <div class="rubrique">
        <a href="../vue/Galerie.vue.php">Galerie</a>
        <a href="../vue/Travail.vue.php">Mon travail</a>
        <a href="../vue/Avis.vue.php">Avis</a>
        <a href="../vue/Contact.vue.php">Contact</a>
      </div>
    </nav>
    <div class="background">
      <h1>Avis clients</h1>
      <div class="avis">
    <?php
    echo"<div class=\"titreAvis\">";
      echo"<h3>Top avis</h3>";
      echo"<a href=\"Laisser_avis.vue.php\">Laisser un avis</a>";
    echo"</div>";
      echo"<div class=\"unAvis\">";
        echo"<h4>Un utilisateur</h4>";
        echo"<p>fdfdfdfd</p>";
        echo"<p>NB etoiles sur 5</p>";
      echo"</div>";
      echo"<div class=\"titreAvis\">";
        echo"<h3>les derniers avis</h3>";
        echo"<a href=\"Laisser_avis.vue.php\">Laisser un avis</a>";
      echo"</div>";
      for($i=0;$i<30;$i++){
        echo"<div class=\"unAvis\">";
          echo"<h4>Un utilisateur</h4>";
          echo"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
          echo"<h5>NB etoiles sur 5</h5>";
        echo"</div>";
      }
     ?>
     </div>
     </div>
<!--Contact-->
    <div class="contact">
      <a href="../vue/Contact.vue.php"><h3>Contactez-moi !</h3></a>
      <div class="infos">
      <div class="item"><u>Téléphone :</u>
      <p> 06 25 01 27 48</p>
      </div>
      <div class="item"><u>E-mail :</u>
      <p>Renoval@gmail.com</p>
      </div>

      </div>
    </div>
  </body>
</html>
