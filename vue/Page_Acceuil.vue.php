<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="Page_Accueil.vue.css">
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
      <a href="../vue/Page_Acceuil.vue.php">Accueil</a>
      <a href="../vue/Galerie.vue.php">Galerie</a>
      <a href="../vue/Travail.vue.php">Notre travail</a>
      <a href="../vue/Avis.vue.php">Avis</a>
      <a href="../vue/Contact.vue.php">Contactez-Nous</a>
    </nav>

    <div class="laisseavis">
      <input type="text" class="nom"  v placeholder="nom ou pseudo">
      <input type="text"  class="avistext" placeholder="laisser un avis">
    <div class="noteclass">
      <p>1</p>
      <input type="radio" class="note">
      <p>2</p>
      <input type="radio" class="note">
      <p>3</p>
      <input type="radio" class="note">
      <p>4</p>
      <input type="radio" class="note">
      <p>5</p>
      <input type="radio" class="note" checked>
    </div>
    </div>



<!--Contact-->
    <div class="contact">
      <a href="../vue/contact.vue.php"><h3>Contactez-nous !</h3></a>
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
