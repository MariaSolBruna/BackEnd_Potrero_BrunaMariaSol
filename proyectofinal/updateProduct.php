<?php
session_start();

// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "adidas");

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];

// 3) Preparar la orden SQL
// => Selecciona todos los campos de la tabla alumno donde el campo dni sea igual a $dni
// a) generar la consulta a realizar
$consulta = "SELECT * FROM clothing WHERE id=$id";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos = mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" />
        <title>ADMIN: UPDATE</title>
    </head>
    <body>
        <?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $typeof=$datos["typeof"];
        $color=$datos["color"];
        $size=$datos["size"];
        $model=$datos["model"];
        $gender=$datos["gender"];
        $price=$datos["price"];
        $sale=$datos["sale"];
        $image1=$datos['image1'];
        $image2=$datos['image2'];
        $image3=$datos['image3'];
        ?>

        <button type="submit"><a href="adminPanel.php">Volver atras</a></button>

        <p>Ingrese los nuevos datos de la prenda.</p>
        
        <div class="addProductContainer">
            <form action="" method="post" enctype="multipart/form-data" class="addProductForm">
                <label>Tipo de prenda</label>
                <input type="text" name="typeof" placeholder="Tipo de Prenda" value="<?php echo "$typeof"; ?>"> 
                <label>Color</label>
                <input type="text" name="color" placeholder="Color" value="<?php echo "$color"; ?>">
                <label>Talle</label>
                <input type="text" name="size" placeholder="Size" value="<?php echo "$size"; ?>">
                <label>Modelo</label>
                <input type="text" name="model" placeholder="Modelo" value="<?php echo "$model"; ?>">
                <label>Genero</label>
                <input type="text" name="gender" placeholder="Genero" value="<?php echo "$gender"; ?>">
                <label>Precio</label>
                <input type="text" name="price" placeholder="Precio" value="<?php echo "$price"; ?>">
                <label>Promocion</label>
                <input type="text" name="sale" placeholder="Promocion" value="<?php echo "$sale"; ?>">
                <label>Imagenes:</label>
                <input type="file" name="image1" placeholder="imagen 1">
                <input type="file" name="image2" placeholder="imagen 2">
                <input type="file" name="image3" placeholder="imagen 3">
                <input type="submit" name="guardar_cambios" value="Guardar Cambios">
                <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
            </form>
        </div>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){

            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
                    $typeof=$_POST["typeof"];
                    $color=$_POST["color"];
                    $size=$_POST["size"];
                    $model=$_POST["model"];
                    $gender=$_POST["gender"];
                    $price=$_POST["price"];
                    $sale=$_POST["sale"];
                    $image1=addslashes(file_get_contents($_FILES['image1']['tmp_name']));
                    $image2=addslashes(file_get_contents($_FILES['image2']['tmp_name']));
                    $image3=addslashes(file_get_contents($_FILES['image3']['tmp_name']));

            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE clothing SET typeof='$typeof', color='$color', size='$size', model='$model', gender='$gender', price='$price', sale='$sale', image1='$image1', image2='$image2', image3='$image3' WHERE id=$id";

             // 4') Ejecutar la orden y actualizamos los datos
             // a) ejecutar la consulta
             mysqli_query($conexion,$consulta);

            // a) rederigir a
            header('location: adminPanel.php');

        }?>
    </body>
</html>
