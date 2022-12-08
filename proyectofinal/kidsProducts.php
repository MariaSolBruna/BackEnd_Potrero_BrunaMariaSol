<?php

$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"adidas");
$consulta = "SELECT * FROM clothing WHERE gender = 'kids'";
$datos = mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Adidas</title>
</head>
<body>

<nav>
    <div  class="navContainer">
        <div class="navBox1">
            <a href="index.php">
                <img src="./images/logo.jpg" class="logoNav">
            </a>
        </div>
        <div class="navBox2">
            <div><a href="womanProducts.php">MUJER</a></div>
            <div><a href="manProducts.php">HOMBRE</a></div>
            <div><a href="kidsProducts.php">NIÑOS</a></div>
        </div>
        <div class="navBox3">
            <a href="login.html">INICIAR SESION</a>
        </div>
    </div>
</nav>

<div class="productsSection">
    <a href="products.php">VER TODOS LOS PRODUCTOS</a>
</div>

<?php

while ($dato = mysqli_fetch_array($datos)) { ?>

<div class="womanProductsContainer">
    <div class="womanProductsBox1">
        <img class="womanImageBoxA" src="data:image/jpg;base64, <?php echo base64_encode($dato['image1'])?>">
        <div class="womanImageBoxBC">
            <img class="womanImageBoxB" src="data:image/jpg;base64, <?php echo base64_encode($dato['image2'])?>">
            <img class="womanImageBoxC" src="data:image/jpg;base64, <?php echo base64_encode($dato['image3'])?>">
        </div>
    </div>
    <div class="womanProductsBox2">
        <p><?php echo $dato['gender']?></p>
        <p>Modelo: <?php echo $dato['model']?></p>
        <p>Color: <?php echo $dato['color']?></p>
        <p>Talle: <?php echo $dato['size']?></p>
        <p>$<?php echo $dato['price']?></p></p>
        <a href="singleProduct.php?id=<?php echo $dato['id'];?>"> <button type="button" name="button">COMPRAR</button></a>
    </div>
</div>

<?php } ?>

<footer>
    <p>Términos y Condiciones</p>
    <p>Política de Cookies</p>
    <p>Política de Privacidad</p>
    <p>Términos #YESadidas</p>
</footer>
    
</body>
</html>