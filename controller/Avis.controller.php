<?php
include('../modele/R-novalDAO.modele/php');
$reponse=$bdd->query('select * from avis');
echo"$reponse";

 ?>
