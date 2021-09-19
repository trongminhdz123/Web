<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hack Desktop</title>
    <!-- <meta http-equiv="refresh" content="7;URL=desktop"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<?php
session_start();







if (isset($_SESSION['id'])) {
    echo '
<body>
<div class="word">LOADING...</div>
<div class="overlay"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script><script  src="js/script.js"></script>

</body>';

} else {
    header("Location: ../index.php");
}
?>

<?php
header("refresh:7;url=desktop/index.php?id=".$_SESSION['id']);
?>

</html>