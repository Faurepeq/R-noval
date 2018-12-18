<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="Galerie.vue.css">
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
      <?php
      $id=$_GET['id'];
      echo"<a href=\"../vue/Galerie.vue.php?id=1\">Galerie</a>"; ?>
        <a href="../vue/Travail.vue.php">Mon travail</a>
        <a href="../vue/Avis.vue.php">Avis</a>
        <a href="../vue/Contact.vue.php">Contact</a>
      </div>
    </nav>
    <div class="titre">
      <h1>Galerie photos</h1>
      <h2>Quelques Avant/Après</h2>
    </div>
<div class="galerie">
  <div class="avantapres">
    <h3>Avant</h3>
    <h3>Après</h3>
  </div>
  <div class="avant">
    <img src="../modele/data/<?php echo"avant$id.jpg";?>" alt="avant">
  </div>
  <div class="apres">
    <img src="../modele/data/<?php echo"apres$id.jpg";?>" alt="apres">
  </div>
</div>
<div class="bouton">
<h4>Réalisation Précédente</h4>
<?php
$idsuivant=$id+1;
$idprecedent=$id-1;
  echo"<a href=\"../vue/Galerie.vue.php?id=$idprecedent\"><img src=\"../modele/data/gauche.png\" alt=\"previous\"></a>";
  echo"<a href=\"../vue/Galerie.vue.php?id=$idsuivant\"><img src=\"../modele/data/droite.png\" alt=\"after\"></a>"; ?>
<h4>Réalisation Suivante</h4>
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
