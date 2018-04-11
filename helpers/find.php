<?php




//traer de vuelta del json y decodificar
/*$recurso = fopen('../validation/datos.json', 'r');
while ($linea = fgets($recurso)) {
  $miArray = json_decode($linea, true);

}*/
if (isset($_POST['find'])) {
  $recoverData = file_get_contents('../validation/datos.json');
  $almacen = json_decode($recoverData);
}

var_dump($almacen);



/*

$jsondejson = json_encode($miArray);
file_put_contents('file.json', $jsondejson . PHP_EOL, FILE_APPEND | LOCK_EX);
var_dump($miArray);

exit;*/
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Formulario busqueda</title>
   </head>
   <body>
     <form class="" action="find.php" method="post">

       <label for="find"></label>
       <input type="text" name="find" value="" id="find">

       <button type="submit" name="button">Enviar</button>
      </form>

   </body>
 </html>
