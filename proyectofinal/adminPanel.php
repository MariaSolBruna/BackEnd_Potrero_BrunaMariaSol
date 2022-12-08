<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>ADMIN</title>
</head>
<body>

    <div class="adminContainer">
        
        <button class="homeBtn"><a href="index.php">INICIO</a></button>
        <h2>ABM: tabla de productos</h2>
        <button class="addAdmin"><a href="addProduct.html">AGREGAR PRODUCTO</a></button>

        <table class="adminTable" border="1">
            <tr>
                <th>ID</th>
                <th>TIPO</th>
                <th>COLOR</th>
                <th>TALLE</th>
                <th>MODELO</th>
                <th>GENERO</th>
                <th>PRECIO</th>
                <th>PROMO</th>
                <th>IMAGEN 1</th>
                <th>IMAGEN 2</th>
                <th>IMAGEN 3</th>
            </tr>

    <?php

    // 1) Conexion
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "adidas");

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta = "SELECT*FROM clothing";

    // 3) Ejecutar la orden y obtenemos los registros
    $datos = mysqli_query($conexion, $consulta);

    // 4) Mostrar los datos del registro
    // EN LA VARIABLE FILA ALMACENAMOS EL ARRAY OBTENIDO A PARTIR DE $datos :
    while ($fila = mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['typeof']; ?></td>
        <td><?php echo $fila['color']; ?></td>
        <td><?php echo $fila['size']; ?></td>
        <td><?php echo $fila['model']; ?></td>
        <td><?php echo $fila['gender']; ?></td>
        <td><?php echo $fila['price']; ?></td>
        <td><?php echo $fila['sale']; ?></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($fila['image1'])?>" alt="" width="100px" height="100px"></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($fila['image2'])?>" alt="" width="100px" height="100px"></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($fila['image3'])?>" alt="" width="100px" height="100px"></td>
        <td class="updateAdmin"><a href="updateProduct.php?id=<?php echo $fila['id'];?>">EDITAR</a></td>
        <td class="deleteAdmin"><a href="deleteProduct.php?id=<?php echo $fila['id'];?>">BORRAR</a></td>
        </tr>
    </div>
    <?php } ?>
    </table>
</body>
</html>
