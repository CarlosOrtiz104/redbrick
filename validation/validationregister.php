<?php
session_start();

$errores = [];

//validation password if both are the same


//validation, no empty data
if (($_POST['first_name'] == '') && ($_POST['last_name'] == '') && ($_POST['display_name'] == '') && ($_POST['email'] == '') && ($_POST['password'] == '') && ($_POST['password_confirmation'] == '')) {
  echo "Please type the proper data on the fields, all the fields are needed";
}
//validacion nombre
$nombre = trim($_POST['first_name']);
if ($nombre == '') {
  $errores[] = "Debe ingresar un nombre";
} else {
  $_SESSION['first_name'] = $nombre;
}
//validacion Apellido
$apellido = trim($_POST['last_name']);
if ($apellido == '') {
  $errores[] = "Debe ingresar un apellido";
} else {
  $_SESSION['last_name'] = $apellido;
}

//validacion display name
$displayname = trim($_POST['display_name']);
if ($displayname == '') {
  $errores[] = "Debe ingresar un apellido";
} else {
  $_SESSION['display_name'] = $displayname;
}

//validacion E-mail
$email = trim($_POST['email']);
if ($email == '') {
  $errores[] = "Debe ingresar un E-mail";
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errores[] = "El E-mail ingresado no es valido";
} else {
  $_SESSION['email'] = $email;
}

//validacion password
$password = trim($_POST['password']);
if ($password == '') {
  $errores[] = "Debe ingresar un password";
}else {
  //hash password
  $hash = password_hash($password, PASSWORD_DEFAULT);
  //como utilizo esta informacion, como la almaceno y como la comparo
  $_SESSION['password'] = $hash;
}

/*funcion para archivo, mejorarla para poder usarla
function saveFile($inputName, $dir, $nombre){
  $origen = $_FILES[$inputName]['tmp_name'];
  $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
  $nombreImagen = uniqid() . '.' . $ext;
  $destino = __DIR__ . '/../content/image/' . $nombre . $nombreImagen;
}*/

//mover archivos
if ($_FILES['avatar']['error'] == UPLOAD_ERR_OK) {//preguntamos si esta todo Bien

  $origen = $_FILES['avatar']['tmp_name'];
  $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
  //$nombre = $_FILES['avatar']['name'];
  $nombreImagen = uniqid() . '.' . $ext;
  $destino = __DIR__ . '/../content/image/' . $nombreImagen;//directorio de las imagenes

  move_uploaded_file($origen, $destino);//mueve un archivo que acaba de ser subido desde origen y destino a traves del path
  //$dir + $nombreImagen + $ext;
}
$_SESSION['avatar'] = $_FILES['avatar'];

var_dump($errores);

$json = file_get_contents('datos.json');
$almacen = json_decode($json);
if (!$almacen) {
  $almacen = [];
}
$almacen[] = $_SESSION;

$json = json_encode($almacen);
file_put_contents('datos.json', $json);
//echo $json;

/*
for ($i=0; $i<count($almacen); $i++) {
  $almacen[$i]['email'] = 'otracosa';
}
*/



//traer de vuelta del json y decodificar
/*$recurso = fopen('datos.txt', 'r');//de momento aca lo hace en segundo y no lo vemos solo para recordar como leer
while ($linea = fgets($recurso)) {
  $miArray = json_decode($linea, true);
  var_dump($miArray);
}

var_dump($_POST);
exit;*/
header("Location: ../home.php");
exit;
 ?>
