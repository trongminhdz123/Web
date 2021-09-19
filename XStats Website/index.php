<?php require('config/config.php'); ?>
<!DOCTYPE HTML>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<title><?php echo$name_top ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link rel="stylesheet" href="css/toolkit-inverse.min.css" />
    <link rel="stylesheet" href="css/application.css" />
    <link rel="stylesheet" href="css/style.css" />

    <style>
    .statcard-success2 {
        background-color: #333;
    }
</style>
</head>
<body>
    <div class="container">
<?php
    $settings['title'] = "";
$settings['ip'] = $ip;
$settings['port'] = $port;
$settings['max_slots'] = $max_slots;

@$content = json_decode(file_get_contents("http://".$settings['ip'].":".$settings['port']."/info.json"), true);
@$img_d64 = $content['icon'];
if($content) {
$gta5_players = file_get_contents("http://".$settings['ip'].":".$settings['port']."/players.json");
$content = json_decode($gta5_players, true);
$pl_count = count($content);
                                    ?>
<div class="row">
    <div class="col-md-12 content">
        <div class="dashhead">
            <div class="dashhead-titles">
                <h2 class="dashhead-title">
                <?php echo$name ?>| <b><a href="<?php echo$discord_url ?>" target="_blank">Discord</a></b> | <b><a href="<?php echo$vote_url ?>" target="_blank">Vote</a></b><br/>
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 content">
        <hr class="mt-3">
    </div>
</div>
 
<div class="row">
    <div class="col-md-12 content"> 
      <div class="statcard statcard-info p-4 mb-4">
          <span class="statcard-desc">IP Adress</span>
          <h3 class="statcard-number">
            <input type="text" readonly value="<?php echo$ip ?>:<?php echo$port ?>" class="no-style" onclick="this.select()" style="width:290px" id="ip"/>
            <a href="fivem://connect/<?php echo$ip ?>:<?php echo$port ?>"><i class="fa fa-play" style="color: white;"></i></a>
          </h3>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-6 content"> 
    <div class="statcard statcard-success p-4 mb-4">
        <h3 class="statcard-number">
        The server is <b>online</b></h3>
        <div class="space-status"></div>
    </div>
  </div>
  <div class="col-md-6 content"> 
    <div class="statcard statcard-primary p-4 mb-4">
        <span class="statcard-desc">Players Count</span>
        <h3 class="statcard-number"><?= $pl_count ?> / <?= $settings['max_slots'] ?></h3>
    </div>
  </div>
</div>
<?php } else { ?>
<div class="row">
    <div class="col-md-12 content">
        <div class="dashhead">
            <div class="dashhead-titles">
                <h2 class="dashhead-title">
                <?php echo$name ?>| <b><a href="<?php echo$discord_url ?>" target="_blank">Discord</a></b> | <b><a href="<?php echo$vote_url ?>" target="_blank">Vote</a></b><br/>
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 content">
        <hr class="mt-3">
    </div>
</div>
 
 <div class="row">
     <div class="col-md-12 content"> 
       <div class="statcard statcard-info p-4 mb-4">
          <span class="statcard-desc">IP Adress</span>
           <h3 class="statcard-number">
             <input type="text" readonly value="<?php echo$ip ?>:<?php echo$port ?>" class="no-style" onclick="this.select()" style="width:290px" id="ip"/>
           </h3>
       </div>
     </div>
 </div>
<div class="row">
  <div class="col-md-6 content"> 
    <div class="statcard statcard-danger p-4 mb-4">
        <h3 class="statcard-number">
        The server is <b>offline</b></h3>
        <div class="space-status"></div>
    </div>
  </div>
  <div class="col-md-6 content"> 
    <div class="statcard statcard-primary p-4 mb-4">
        <span class="statcard-desc">Players Count</span>
        <h3 class="statcard-number">0 / 0</h3>
    </div>
  </div>
</div>
<?php
          } ?>
<div class="row">
  <div class="col-md-12 content">
      <hr class="mt-3">
  </div>
</div>
    </div>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="../stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"/></script>

</body>
</html>