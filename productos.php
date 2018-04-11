<?php
session_start();
 ?>
 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Red Brick - Products</title>
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


      <!--start productos-->
      <div class="container">
        <div class="row">
          <!--Start of line of products-->
          <div class="col-sm-1">

          </div>
          <div class="col-sm-3">
            <div class="panel panel-primary">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="image/macarrons.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="panel panel-danger">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="panel panel-success">
              <div class="panel-heading">BLACK FRIDAY DEAL</div>
              <div class="panel-body"><img src="image/postrepildora.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
            </div>
          </div>
          <div class="col-sm-1">

          </div>
        </div>
        <!--End of line of products-->

        <?php

        for ($i=0; $i < 15 ; $i++) {
          ?>
          <div class="col-sm-3">
            <div class="panel panel-danger">
              <div class="panel-heading">Maracuya mouse</div>
              <div class="panel-body"><img src="image/postrepildora.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer">
                <!--Styling to see-->
                <style>.cost-iten{display: inline-block; background-color: white;}</style>
                <ul class="cost">
                  <li class="cost-iten">Precio</li>
                  <li class="cost-iten">18</li>
                  <li class="cost-iten">$</li>
                  <li class="cost-iten"><-</li>
                  <li class="cost-iten">2</li>
                  <li class="cost-iten">-></li>
                  <li class="cost-iten">30</li>
                  <li class="cost-iten">$</li>
                </ul>
              </div>
            </div>
          </div>
          <?php
        }

         ?>

      </div><br>

      <!--end preductos-->


    </main>
    <footer>
      <?php require("helpers/footer.php") ?>
    </footer>

  </body>
</html>
