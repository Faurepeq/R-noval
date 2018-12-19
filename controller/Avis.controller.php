<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
include('../modele/R-novalDAO.modele/php');
$reponse=$bdd->query('select * from avis');
echo"$reponse";

 ?>
