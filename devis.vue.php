<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="devis.vue.css">
  <head>
    <meta charset="utf-8">
    <title>Gtouch Devis</title>
  </head>
  <body>
    <h1>Gtouch</h1>
    <nav>
      <a href="page_accueil.vue.php"><p>Accueil</p></a>
      <a href="devis.vue.php"><p>Demander un devis</p></a>
      <a href="mode_emploi.vue.php"><p>Mode d'emploi</p></a>
      <?php
    if(isset($_SESSION['mail'])){
      echo "<a href=\"monCompte.controller.php?id=";
      echo $_SESSION['mail'];
      echo"<p>Bienvenue";
      echo $_SESSION['mail'];
      echo"</p></a>";
      echo"<a href=\"../controler/deconnexion.controler.php\"><p>Déconnexion</p></a>";
    }
    else {
      echo "<a href=\"../vue/connexion.vue.php\"><p>Se connecter</p></a>";
    }
      ?>
</nav>
    <a href="connexion.php">Il faut d'abord vous connecter</a>
    <p>Ici vous pouvez demander un devis afin d'avoir l'aide d'un graphiste,
       pour ce faire nous avons besoin de quelques information a votre sujet
        ainsi que la photo et une description des modifications que le graphiste
         devra faire.</p>

      <form class="infos" action="index.html" method="post">
        <p>Nom</p>
        <input type="text" class="nom" placeholder="Nom" >
        <p>Prénom</p>
        <input type="text" class="prenom" placeholder="Prénom">
        <p>E-mail</p>
        <input type="text" class="mail" placeholder="E-mail" >
        <p>Votre photo</p>
        <input type="file" class="photo">
        <p>Description détaillée du projet</p>
        <input type="text" class="description" placeholder="Description du projet">
        <input class="envoi" type="submit" value="Envoyer">
      </form>


  </body>
</html>
