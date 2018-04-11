<?php
session_start();
 ?>

 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Red Brick - My Account</title>
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
      <?php require("helpers/header.php"); ?>

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
    	</div>
    </main>
    <aside class="aside-bar">
      <ul>
				<li><a href="home.php"><span class="icon-home"></span>Home</a></li>
				<li><a href="productos.php"><span class="icon-tree"></span>Productos</a></li>
				<li class="submenu">
					<a href="#"><span class="icon-rocket"></span>Proyectos<span class="caret icon-arrow-down6"></span></a>
					<ul class="children">
						<li><a href="#">SubElemento #1 <span class="icon-quill"></span></a></li>
						<li><a href="#">SubElemento #2 <span class="icon-pen"></span></a></li>
						<li><a href="#">SubElemento #3 <span class="icon-pencil"></span></a></li>
					</ul>
				</li>
				<li><a href="#"><span class="icon-mobile"></span>Servicios</a></li>
				<li><a href="#"><span class="icon-blog"></span>Contacto</a></li>
        <li><a href="shoppingcar.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
			</ul>
    </aside>
    <footer>
      <?php require("helpers/footer.php") ?>
    </footer>

  </body>
</html>
