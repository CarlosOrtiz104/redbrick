<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Red Brick - Login</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/fonts.css">
    <link href="image/redbrick.png" rel="shortcut icon" type="image/x-icon" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="font/fontawesome-all.min.css">
    <script src="js/main.js"></script>

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


      <!--start login-->
      <div class="container">

      <div class="row" style="margin-top:20px">
          <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      		<form role="form">
      			<fieldset>
      				<h2>Please Sign In</h2>
      				<hr class="colorgraph">
      				<div class="form-group">
                          <input type="email" name="email" id="email" class="form-control input-lg" placeholder="<?php if (isset($_SESSION['email'])) {
                            echo $_SESSION['email'];
                          } else {
                            echo "E-mail";
                          } ?>">
      				</div>
      				<div class="form-group">
                          <input type="password" name="password" id="password" class="form-control input-lg" placeholder="<?php if (isset($_SESSION['email'])) {
                            echo "************";
                          } else {
                            echo "Password";
                          } ?>">
      				</div>
      				<span class="button-checkbox">
      					<button type="button" class="btn" data-color="info">Remember Me</button><!--Remember me with post and save on session-->
                          <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
      					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
      				</span>
      				<hr class="colorgraph">
      				<div class="row">
      					<div class="col-xs-4 col-sm-4 col-md-4">
                              <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
      					</div>
      					<div class="col-xs-4 col-sm-4 col-md-4">
      						<a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
      					</div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <input type="reset" class="btn btn-lg btn-warning btn-block" value="Reset">
      					</div>
      				</div>
      			</fieldset>
      		</form>
      	</div>
      </div>

      </div>
      <!--End login-->


    </main>
    <footer>
      <?php require("helpers/footer.php") ?>
    </footer>

  </body>
</html>
