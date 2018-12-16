<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="Contact.vue.css">
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

<!--formulaire de contact-->
    <form class="formulaire" action="index.php" method="post">
      <div class="item">
        <p>Nom*</p>
        <input type="text" class="nom" placeholder="Nom"required >
      </div>
      <div class="item">
        <p>Prénom*</p>
        <input type="text" class="prenom" placeholder="Prénom"required>
      </div>
      <div class="item">
        <p>E-mail*</p>
        <input type="email" class="mail" placeholder="E-mail" required>
      </div>
      <div class="item">
        <p>Adresse</p>
        <input type="text" class="adresse" placeholder="Adresse" required>
      </div>
      <div class="item">
        <p>Ville</p>
        <input type="text" class="ville" placeholder="Ville" required>
      </div>
      <div class="item">
        <p>Code postal</p>
        <input type="text" class="postal" placeholder="Code postal" required>
      </div>
      <div class="item">
        <p>Téléphone*</p>
        <input type="tel" class="telephone" placeholder="Téléphone" required>
      </div>
      <div class="fichier">
        <p>Quelques photos du projet</p>
        <input type="file" class="photo">
      </div>
      <div class="descr">
        <p>Description du projet </p>
        <input type="text" class="description" placeholder="Description du projet"
        minlength="4" maxlength="8" size="10">
      </div>
        <input class="envoi" type="submit" value="Envoyer">
    </form>
    <p>* Obligatoire</p>
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
