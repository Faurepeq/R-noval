<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="Laisser_avis.vue.css">
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
        <a href="../vue/Contact.vue.php">Contactez-moi</a>
      </div>
    </nav>

<!--formulaire pour laisser un avis-->
<h1>Laisser un avis</h1>
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
