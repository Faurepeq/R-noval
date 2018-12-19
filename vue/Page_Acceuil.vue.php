<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="Page_Accueil.vue.css">
  <head>
    <meta charset="utf-8">
    <title>Rénoval</title>
  </head>
  <body>
    <!--Navigateur-->
    <nav>
      <div class="logo">
        <a href="../vue/Page_Acceuil.vue.php"><h4>Rénoval</h4></a>
      </div>
      <div class="rubrique">
        <?php
        $id=$_GET['id'];
        echo"<a href=\"../vue/Galerie.vue.php?id=1\"><h4>Galerie</h4></a>"; ?>
        <a href="../vue/Travail.vue.php">Mon travail</a>
        <a href="../vue/Avis.vue.php">Avis</a>
        <a href="../vue/Contact.vue.php">Contact</a>
      </div>
    </nav>
    <h1>Bienvenue sur Rénoval</h1>
<p>Basé en Savoie depuis 2009, je met mon expérience et ma passion au service de vos projet dans le batiment.</p>




<!--Contact-->
    <div class="contact">
      <a href="../vue/contact.vue.php"><h3>Contactez-moi !</h3></a>
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
