<?php
session_start();

$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"adidas");
$id = $_GET['id'];
$consulta = "SELECT * FROM clothing WHERE id=$id";
$dato=mysqli_query ($conexion, $consulta);
$datos=mysqli_fetch_array($dato);
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
  $typeof=$datos["typeof"];
  $color=$datos["color"];
  $size=$datos["size"];
  $model=$datos["model"];
  $price=$datos["price"];
  $image1=$datos["image1"];
  $image2=$datos["image2"];
  $image3=$datos["image3"];
  ?>

<div class="singleProductContainer">
    <div class="singleProductBox1">
        <img src="data:image/jpg;base64, <?php echo base64_encode($image1)?>">
        <img src="data:image/jpg;base64, <?php echo base64_encode($image2)?>">
        <img src="data:image/jpg;base64, <?php echo base64_encode($image3)?>">
    </div>
    <div class="singleProductBox2">
        <p>Modelo: <?php echo $model?></p>
        <p>Color: <?php echo $color?></p>
        <p>Talle: <?php echo $size?></p>
        <p>$<?php echo $price?></p>
        <a href="buy.html"> <button type="button"        
        name="button" class="singleProductBuy">COMPRAR</button></a>       
    </div>
</div>

<footer>
    <p>Términos y Condiciones</p>
    <p>Política de Cookies</p>
    <p>Política de Privacidad</p>
    <p>Términos #YESadidas</p>
</footer>
    
</body>
</html>