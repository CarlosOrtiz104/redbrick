<?php
session_start();
 ?>

 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Red Brick - Home</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/fonts.css">
    <link href="image/redbrick.png" rel="shortcut icon" type="image/x-icon" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="font/fontawesome-all.min.css">
    <script src="js/main.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    </head>
  <body>

    <header>
      <style>
        .title-welcome{position: absolute;top: 0;left: 65%;}
      </style>
      <?php require("helpers/header.php");

      if (isset($_SESSION['email'])) {
        ?><div class="title-welcome"><?php
        echo "<h2>Welcome " . $_SESSION['display_name'] . "</h2>";
        ?></div><div class="login-button"><a href="validation/logout.php">Log out</a></div><?php
      } else {
      ?><div class="title-welcome"><strong><?php echo "Welcome, please login";?></strong><?php
        ?></div><div class="login-button"><a href="login.php">Login</a></div><?php
      }
       ?>


    </header>
    <main>
      <div class="contenedor">
    		<article>
    			<h2>Titulo del Articulo</h2>
    			<hr>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    		</article>
        <article>
    			<h2>Titulo del Articulo</h2>
    			<hr>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    		</article>
    	</div>
    </main>
    <footer>
      <?php require("helpers/footer.php") ?>
    </footer>

  </body>
</html>
