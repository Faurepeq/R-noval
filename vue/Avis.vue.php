<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="Avis.vue.css">
  <head>
    <meta charset="utf-8">
    <title>Rénoval</title>
  </head>
  <body>
<!--logo et titre de la page-->
    <div class="titre">
    <img src="../modele/data/logo.jpg" alt="logo">
    <div class="nomslogan"><h1>Rénoval</h1>
    </div>
    </div>
    <!--Navigateur-->
    <nav>
      <div class="logo">
        <a href="../vue/Page_Acceuil.vue.php">Rénoval</a>
      </div>
      <div class="rubrique">
        <a href="../vue/Galerie.vue.php">Galerie</a>
        <a href="../vue/Travail.vue.php">Mon travail</a>
        <a href="../vue/Avis.vue.php">Avis</a>
        <a href="../vue/Contact.vue.php">Contactez-Nous</a>
      </div>
    </nav>
    <div class="background">
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
          echo"<p>fdfdfdfdf</p>";
          echo"<p>NB etoiles sur 5</p>";
        echo"</div>";
      }
     ?>
     </div>
     </div>
<!--Contact-->
    <div class="contact">
      <a href="../vue/Contact.vue.php"><h3>Contactez-nous !</h3></a>
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
