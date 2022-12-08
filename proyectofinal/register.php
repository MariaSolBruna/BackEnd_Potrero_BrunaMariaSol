<?php
  // 1) Conexion
  // a) realizar la conexion con la bbdd
  // b) seleccionar la base de datos a usar
    $conexion = mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion, "adidas");

  // 2) Almacenamos los datos del envío POST
  // a) generar variables para cada dato a almacenar en la bbdd
  $user = $_POST['user'];
  $email = $_POST['email'];
  $passw = $_POST['passw'];

//  Validar si el usuario existe
  $consulta = "SELECT * FROM users WHERE user='$user'";
  $datos = mysqli_query($conexion, $consulta);
  $objResultado = mysqli_fetch_object($datos);

  if($objResultado == '') {
  // 3) Preparar la orden SQL
  // INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
  // => Ingresa dentro de la siguiente tabla los siguientes valores
  // a) generar la consulta a realizar
    $consulta = "INSERT INTO users (id,user,email,passw)
    VALUES ('','$user','$email','$passw')";
    // a) ejecutar la consulta
    mysqli_query($conexion,$consulta);
    // a) redirigir a
    header('location: index.php');
  } else{
    echo "El usuario ya existe, intente nuevamente.";  
  };
?>