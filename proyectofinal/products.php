<?php
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"adidas");
$consulta = "SELECT * FROM clothing";
$datos = mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
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
            INICIAR SESION
        </div>
    </div>
</nav>

<div class="productsHeader">
    <h2>TODOS NUESTROS PRODUCTOS</h2> 
    <p>Filtrar:</p>   
    <button>
        <a href="cheapProducts.php">- $500</a>
    </button>
    <button>
        <a href="expensProducts.php">+ $500</a>
    </button>
</div>

<section class="productsMainContainer">
    <?php
        while ($dato = mysqli_fetch_array($datos)) { ?>
        <div class="productsContainer">
            <div class="productsBox1">
                <img class="imageBoxA" src="data:image/jpg;base64, <?php echo base64_encode($dato['image1'])?>">
            </div>
            <div class="productsBox2">
                <p><?php echo $dato['typeof']?></p>
                <p>Modelo: <?php echo $dato['model']?></p>
                <p>$<?php echo $dato['price']?></p></p>
                <a href="singleProduct.php?id=<?php echo $dato['id'];?>"> <button type="button" name="button">COMPRAR</button></a>
            </div>
        </div>
    <?php } ?>
</section>

<footer>
    <p>Términos y Condiciones</p>
    <p>Política de Cookies</p>
    <p>Política de Privacidad</p>
    <p>Términos #YESadidas</p>
</footer>
    
</body>
</html>