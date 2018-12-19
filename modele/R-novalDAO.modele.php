<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=Renoval;charset=utf8', 'root','bouze123');
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}




 ?>
