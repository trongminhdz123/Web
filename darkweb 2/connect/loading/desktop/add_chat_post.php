<?php
// Calls for the config file
include( "../../inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO chat ( username, message) VALUES(?, ?)');
$req->execute(array($_POST['username'], $_POST['message']));

// Redirect user back to the add criminal page
header('Location: index.php');

?>