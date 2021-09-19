<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
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
        <?php
session_start();







if (isset($_SESSION['id'])) {
    echo '
<body>
  <div class="container">
    <div class="panel panel-primary dialog-panel">
      <div class="panel-heading">
        <h5>Prise de rendez-vous EMS<a href="inc/logout.php"><strong class="logout">Logout</strong></a></h5>
      </div>
      <div class="panel-body">
          <div class="form-group">
           <center><input class="btn btn-danger" type="button" onclick="window.location.reload(false)" value="Refresh"></center>
            <h3 class="connexion-text">APPOINTMENT</h3>
            ';
      include("inc/config.php");
      // Get contents of the lspd table
      $reponse = $bdd->query('SELECT * FROM register ORDER BY id DESC ');
      
      // Display each entry one by one
      while ($data = $reponse->fetch()) {
      ?>
              <form class="form-horizontal" action='inc/delete_entry.php' method='post'>
            <div class="position-box">
                  <div class="box">
                    <div class="box-info"><?php echo $data['civilities']; ?> <?php echo $data['first_name']; ?> <?php echo $data['last_name']; ?></div>
                    <div class="space"></div>
                    <div class="box-info"><?php echo $data['phone']; ?></div>
                    <div class="space"></div>
                    <div class="box-info">Le <?php echo $data['date']; ?> à <?php echo $data['time']; ?></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="box-info">motif</div>
                    <div class="box-info"><?php echo $data['additional']; ?></div>
                    <div class="space"></div>
              <form class="form-horizontal" action='inc/delete_entry.php' method='post'>
            <div class="delete">
            <?php
        echo '<button class="btn btn-danger" id="btn-delete" name="deleteItem" type="submit" value="' . $data['id'] . '">Delete</button>'; ?>
          </div>
          </div>
        </form>
          </div>
                                                <?php
    }
    $reponse->closeCursor(); // Complete query
    echo '
          </div>
      </div>
    </div>
  </div>
</body>
<!-- partial -->
  <script  src="./script.js"></script>

</body>';
} else {
    header("Location: login.php");
}
?> </html>
