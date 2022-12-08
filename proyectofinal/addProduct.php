<?php
session_start();

  // 1) Conexion
  // a) realizar la conexion con la bbdd
  // b) seleccionar la base de datos a usar
    $conexion = mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion, "adidas");

  // 2) Almacenamos los datos del envío POST
  // a) generar variables para cada dato a almacenar en la bbdd
  $typeof = $_POST['typeof'];
  $color = $_POST['color'];
  $size = $_POST['size'];
  $model = $_POST['model'];
  $gender = $_POST['gender'];
  $price = $_POST['price'];
  $sale = $_POST['sale'];

 // Si se desea almacenar una imagen en la base de datos usar lo siguiente: addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
  $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
  $image2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
  $image3 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));

  // 3) Preparar la orden SQL
  // INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
  // => Ingresa dentro de la siguiente tabla los siguientes valores
  // a) generar la consulta a realizar
    $consulta = "INSERT INTO clothing (id,typeof,color,size,model,gender,price,sale,image1,image2,image3)
    VALUES ('','$typeof','$color','$size','$model','$gender','$price','$sale','$image1','$image2','$image3')";

  // a) ejecutar la consulta
  mysqli_query($conexion,$consulta);
  // a) redirigir al panel de Admin
  header('location: adminPanel.php');
?>
