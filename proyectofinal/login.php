<?php

// Creo la conexion a la bd:
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"adidas");

$userLogin = $_POST['userLoginPost'];
$passwLogin = $_POST['passwLoginPost'];

// Selecciono todos los usuarios donde los datos de usuario y contraseña  de la bd
// y los ingresados a través del POST coincidan:
$consulta = "SELECT * FROM users WHERE user='$userLogin' AND passw='$passwLogin'";

// Datos obtenidos:
$datos = mysqli_query($conexion, $consulta);

// Crear array con datos obtenidos:
$objResultado = mysqli_fetch_object($datos);

  if ($objResultado->admin == 'Yes'){
    header ("location:adminPanel.php");
  } elseif ($objResultado->admin == 'No'){
    header ("location:index.php");
  } else {
    header ("location:error.html");}

session_start();
// Para si quiero utilizar el dato de usuario en otro lado:
$_SESSION["logeado"] = $userLogin;

 ?>