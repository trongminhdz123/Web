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
        <h5>Car mechanic appointment<a href="login.php"><strong class="connexion">Connexion</strong></a></h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' action="add_register_post.php" method="post">
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Civilities</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' name="civilities" required>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                  </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' placeholder='First Name' name="first_name" type='text' required>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' placeholder='Last Name' name="last_name" type='text' required>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Contact</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control col-md-8' name="phone" id="phone" placeholder='Phone' type='number' required>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Make an appointment</label>
            <div class='col-md-6'>
            <div class='form-group'>
                <div class='col-md-11'>
                <input type="date" name="date" class='form-control col-md-8' min="2020-01-01" max="2030-12-31" required>
                </div>
              </div>
              <div class='form-group'>
                <div class='col-md-11'>
                <input type="time" name="time" class='form-control col-md-8' required>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Intervention needed</label>
            <div class='col-md-6'>
              <select class='form-control' name="intervention" id="intervention" required>
              <option value="repair">Repair</option>
              <option value="customisation">Customisation</option>
              <option value="cleaning">Cleaning</option>
              <option value="others">Others</option>
              </select>
            </div>
          </div>


<div class='form-group'>
<label class='control-label col-md-2 col-md-offset-2'>Engine</label>
<div class='col-md-8'>
<div class='col-md-3 indent-small'>
<label></label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="engine" value="" checked>
<label>Yes</label>
<input type="radio" name="engine" value="Engine">
</div>
</div>
</div>
</div>






<div class='form-group'>
<label class='control-label col-md-2 col-md-offset-2'>wheels</label>
<div class='col-md-8'>
<div class='col-md-3 indent-small'>
<label>Front Left Wheel</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="front_left_wheel" value="" checked>
<label>Yes</label>
<input type="radio" name="front_left_wheel" value="Front Left Wheel">
</div>
</div>
<div class='col-md-3 indent-small'>
<label>Front Right Wheel</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="front_right_wheel" value="" checked>
<label>Yes</label>
<input type="radio" name="front_right_wheel" value="Front Right Wheel">
</div>
</div>
<div class='col-md-3 indent-small'>
<label>Back Right Wheel</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="back_right_wheel" value="" checked>
<label>Yes</label>
<input type="radio" name="back_right_wheel" value="Back Right Wheel">
</div>
</div>
<div class='col-md-3 indent-small'>
<label>Back left Wheel</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="back_left_wheel" value="" checked>
<label>Yes</label>
<input type="radio" name="back_left_wheel" value="Back left Wheel">
</div>
</div>
</div>
</div>
<div class='form-group'>
<label class='control-label col-md-2 col-md-offset-2'>body</label>
<div class='col-md-8'>
<div class='col-md-3 indent-small'>
<label>First door right</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="first_door_right" value="" checked>
<label>Yes</label>
<input type="radio" name="first_door_right" value="First door right">
</div>
</div>
<div class='col-md-3 indent-small'>
<label>Second door right</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="second_door_right" value="" checked>
<label>Yes</label>
<input type="radio" name="second_door_right" value="Second door right">
</div>
</div>
<div class='col-md-3 indent-small'>
<label>First door left</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="first_door_left" value="" checked>
<label>Yes</label>
<input type="radio" name="first_door_left" value="First door left">
</div>
</div>
<div class='col-md-3 indent-small'>
<label>Second Door left</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="second_door_left" value="" checked>
<label>Yes</label>
<input type="radio" name="second_door_left" value="Second Door left">
</div>
</div>
<div class='col-md-3 indent-small'>
<label>Hood</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="hood" value="" checked>
<label>Yes</label>
<input type="radio" name="hood" value="Hood">
</div>
</div>
<div class='col-md-3 indent-small'>
<label>Trunk</label>
<div class='form-group internal'>
<label>No</label>
<input type="radio" name="trunk" value="" checked>
<label>Yes</label>
<input type="radio" name="trunk" value="Trunk">
</div>
</div>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-2 col-md-offset-2" for="id_comments">Others</label>
<div class="col-md-6">
<textarea class="form-control" placeholder="Additional comments" name="additional" rows="3"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-md-offset-5 col-md-3">
<input class="btn-lg btn-primary" type="submit" value="Request Reservation">
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
