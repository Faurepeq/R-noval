<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=Renoval;charset=utf8', 'root','bouze123');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}





 ?>
