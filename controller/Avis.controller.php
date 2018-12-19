<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
include('../modele/R-novalDAO.modele.php');
$requete=$bdd->query('select numero from avis where numero=1');
var_dump($requete);

 ?>
