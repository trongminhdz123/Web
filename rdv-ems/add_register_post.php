<?php
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO register (first_name, last_name, phone, date, time, additional, civilities) VALUES(?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['first_name'], 
$_POST['last_name'], $_POST['phone'], $_POST['date'], $_POST['time'], $_POST['additional'], $_POST['civilities']));

header('Location: index.php');

?>
