<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Red Brick - Register</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/fonts.css">
    <link href="image/redbrick.png" rel="shortcut icon" type="image/x-icon" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="font/fontawesome-all.min.css">
    <script src="js/mainregister.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Include the above in your HEAD tag ---------->

    </head>
  <body>

    <header>
      <?php require("helpers/header.php"); ?>
    </header>
    <main>
      <!--start rister-->

      <div class="container">

      <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      		<form role="form" action="validation/validationregister.php" method="post">
      			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
      			<hr class="colorgraph">
      			<div class="row">
      				<div class="col-xs-12 col-sm-6 col-md-6">
      					<div class="form-group">
                  <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="<?php if (isset($_SESSION['first_name'])) {
                    echo $_SESSION['first_name'];
                  } else {
                    echo "First Name";
                  } ?>" tabindex="1">
      					</div>
      				</div>
      				<div class="col-xs-12 col-sm-6 col-md-6">
      					<div class="form-group">
      						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="<?php if (isset($_SESSION['last_name'])) {
                    echo $_SESSION['last_name'];
                  } else {
                    echo "Last Name";
                  } ?>" tabindex="2">
      					</div>
      				</div>
      			</div>
      			<div class="form-group">
      				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="<?php if (isset($_SESSION['display_name'])) {
                echo $_SESSION['display_name'];
              } else {
                echo "Display Name";
              } ?>" tabindex="3">
      			</div>
      			<div class="form-group">
      				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="<?php if (isset($_SESSION['email'])) {
                echo $_SESSION['email'];
              } else {
                echo "E-mail";
              } ?>" tabindex="4">
      			</div>
      			<div class="row">
      				<div class="col-xs-12 col-sm-6 col-md-6">
      					<div class="form-group">
      						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
      					</div>
      				</div>
      				<div class="col-xs-12 col-sm-6 col-md-6">
      					<div class="form-group">
      						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
      					</div>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-xs-4 col-sm-3 col-md-3">
      					<span class="button-checkbox">
      						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                              <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
      					</span>
      				</div>
      				<div class="col-xs-8 col-sm-9 col-md-9">
      					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
      				</div>
      			</div>

      			<hr class="colorgraph">
      			<div class="row">
      				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
      				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
      			</div>
      		</form>
      	</div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      	<div class="modal-dialog modal-lg">
      		<div class="modal-content">
      			<div class="modal-header">
      				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
      			</div>
      			<div class="modal-body">
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      			</div>
      			<div class="modal-footer">
      				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
      			</div>
      		</div><!-- /.modal-content -->
      	</div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      </div>
      <!--End register-->


    </main>
    <footer>
      <?php require("helpers/footer.php") ?>
    </footer>

  </body>
</html>
