<?php
session_start();

include( "inc/config.php" );

if(isset($_POST['formconnexion'])) {
   $usernameconnect = htmlspecialchars($_POST['usernameconnect']);
   $passwordconnect = ($_POST['passwordconnect']);
   if(!empty($usernameconnect) AND !empty($passwordconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
      $requser->execute(array($usernameconnect, $passwordconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['username'] = $userinfo['username'];
         header("Location: admin.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Username or password is invalid !";
      }
   } else {
      $erreur = "All fields should be completed !";
   }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Mechanic Appointment</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<head>
  <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
  <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
  <link href='https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
  <script src='https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>
</head>
<body>
  <div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Car mechanic appointment<a href="index.php"><strong class="back">Back</strong></a></h5>
      </div>
      <div class='panel-body'>
          <div class='form-group'>
            <h3 class="connexion-text">CONNECT</h3>
<?php
         if(isset($erreur)) {
            echo '<center><font color="red">'.$erreur."</font></center>";
         }
         ?>
         <form class='form-horizontal' method="POST" action="">
            <label class='control-label col-md-2 col-md-offset-2'></label>
            <div class='col-md-6'>
            <div class='form-group'>
                <div class='col-md-11'>
                <input type="text" name="usernameconnect" class='form-control col-md-8' placeholder="Username">
              </div>
              </div>
              <div class='form-group'>
                <div class='col-md-11'>
                <input type="password" name="passwordconnect" class='form-control col-md-8' placeholder="password">
                </div>
              </div>
            </div>
            <div class="connect">
           <input class="btn-lg btn-primary" id="btn-connect" type="submit" value="Connect" name="formconnexion">
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
