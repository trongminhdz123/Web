<?php
$username = "root"; // username
$password = ""; // password of the database
$hostname = "localhost"; // host of the database
$namebase = "darkweb"; // name of the database




try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
 }
  catch (Exception $e)
 {
  // If an error is thrown, display the message
  die('Erreur : ' . $e->getMessage());
 }
 ?>