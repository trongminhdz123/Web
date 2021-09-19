<?php
include( "inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO register (first_name, last_name, phone, date, time, intervention, engine, civilities, front_left_wheel, front_right_wheel, back_right_wheel, back_left_wheel, first_door_right, second_door_right, first_door_left, second_door_left, hood, trunk, additional) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['first_name'], 
$_POST['last_name'], $_POST['phone'], $_POST['date'], $_POST['time'],
$_POST['intervention'], $_POST['engine'], $_POST['civilities'], 
$_POST['front_left_wheel'], $_POST['front_right_wheel'], $_POST['back_right_wheel'],
$_POST['back_left_wheel'], $_POST['first_door_right'], $_POST['second_door_right'], $_POST['first_door_left'], 
$_POST['second_door_left'], $_POST['hood'], $_POST['trunk'], $_POST['additional']));

header('Location: index.php');

?>
