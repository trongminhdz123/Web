<?php

include( "inc/config.php" );

if(isset($_POST['forminscription'])) {
   $username = htmlspecialchars($_POST['username']);
   $pass = sha1($_POST['pass']);
   if(!empty($_POST['username']) AND !empty($_POST['pass'])) {
      if($pseudolength <= 32) {
         if($username) {
            if(filter_var($username)) {
               $requsername = $bdd->prepare("SELECT * FROM users WHERE username = ?");
               $requsername->execute(array($username));
               $usernameexist = $requsername->rowCount();
               if($usernameexist == 0) {
                  if($pass) {
                     $insertmbr = $bdd->prepare("INSERT INTO users(username, pass) VALUES(?, ?)");
                     $insertmbr->execute(array($username, $pass));
                     $erreur = "Your account has been created! <a href=\"index.php\">Login Here</a>";
                  } else {
                     $erreur = "Passwords do not match!";
                  }
               } else {
                  $erreur = "Email is already in use!";
               }
            } else {
               $erreur = "Your email address is invalid!";
            }
         } else {
            $erreur = "Password do not match!";
         }
      } else {
         $erreur = "Username can be a maximum of 32 characters!";
      }
   } else {
      $erreur = "All of the fields must be filled!";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="cont">
        <div class="demo">
            <div class="login">
                <img src="img/avatar.png" width="300">
                <form method="POST" action="">
                    <div class="login__form">
                        <?php
         if(isset($erreur)) {
            echo '<font color="red" class="alert-danger">'.$erreur."</font>";
         }
         ?>
                        <div class="login__row">
                            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                                <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                            </svg>
                            <input type="text" class="login__input name" name="username" placeholder="Username" />
                        </div>
                        <div class="login__row">
                            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                            </svg>
                            <input type="password" class="login__input pass" name="pass" placeholder="Password" />
                        </div>
                        <button type="submit" name="forminscription" class="login__submit">Create account</button>
                        <p class="login__signup">You have already an account? &nbsp;<a href="index.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/script.js"></script>

</body>

</html>