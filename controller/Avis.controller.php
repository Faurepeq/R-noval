<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
include('../modele/R-novalDAO.modele.php');
$numero=1;
$maxNum=$bdd->query("select max(numero)from avis");
while($numero<=$maxNum){
  $requete=$bdd->query("select numero,nomUtilisateur,texte,etoiles from avis where numero=$numero");
  $resultat=$requete->fetch()
  $nom=$resultat['nomUtilisateur'];
  $texte=$resultat['texte'];
  $etoile=$resultat['etoiles'];
  var_dump($nom);
  $numero++;
}

 ?>
