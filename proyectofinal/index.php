<?php
session_start();

// Consulta para traer los productos en promo:
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"adidas");
$consulta = "SELECT * FROM clothing WHERE sale = 'Yes'";
$datos = mysqli_query($conexion, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    
    <title>Adidas</title>
</head>
<body>

<nav>
    <div  class="navContainer">
        <div class="navBox1">
            <img src="./images/logo.jpg" class="logoNav">
        </div>
        <div class="navBox2">
            <div><a href="womanProducts.php">MUJER</a></div>
            <div><a href="manProducts.php">HOMBRE</a></div>
            <div><a href="kidsProducts.php">NIÑOS</a></div>
        </div>
        <div class="navBox3">
            <a href="login.html">INICIAR SESION</a>

        <!-- BOTON DE LOGIN/LOGOUT QUE NO PUDE HACER ANDAR: -->
           <!-- <?php 
                    if($_SESSION["logeado"]){
               ?>
                        <span class="right" style="display:block;"><a href="logout.php">LogOut</a> </span>
                        <span class="right" style="display:none;"><a href='login.html'>LogIn</a> </span>
                <?php 
                    }else{
                ?>
                    <span class="right" style="display:block;"><a href='login.html'>LogIn</a> </span>
                    <span class="right" style="display:none;"><a href="logout.php">LogOut</a> </span>
                <?php 
                }
            ?> -->

        </div>
    </div>
</nav>





<section>
    <div class="imgHeader">
        <!-- <img src="images/navImage.jpg"> -->
        <img src="./images/messi.png">
    </div>
</section>

<div class="relleno">

</div>

<section class="saleSection">
    <div class="saleContainer1">
        <h2>OFERTAS POR TIEMPO LIMITADO</h2>
    </div>

    <div class="saleContainer2">
        <?php
            while ($dato = mysqli_fetch_array($datos)) { ?>
            <div class="saleBoxes">
                <div class="saleBox1">
                    <img class="imageBoxA" src="data:image/jpg;base64, <?php echo base64_encode($dato['image1'])?>">
                </div>
                <div class="saleBox2">
                    <p><?php echo $dato['gender']?></p>
                    <p class="model"><?php echo $dato['model']?></p>
                    <p class="price">$<?php echo $dato['price']?></p></p>
                    <a href="singleProduct.php?id=<?php echo $dato['id'];?>"> <button type="button" name="button" class="btnBuyIndex">COMPRAR</button></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<section class="sectionTend">
    <div class="tendContainer1">
       <h2>TENDENCIAS</h2>
       <a href="products.php">VER TODOS LOS PRODUCTOS</a>
    </div>
    <div class="tendContainer2">
        <div>
            <h3>MUJER</h3> 
            <a href="womanProducts.php">
                <img src="./images/mujer.png">
            </a>
        </div>
        <div>
            <h3>HOMBRE</h3> 
            <a href="manProducts.php">
                <img src="./images/hombre.png">
            </a>
        </div>
        <div>
            <h3>KIDS</h3> 
            <a href="kidsProducts.php"> 
                <img src="./images/ninos.png">
            </a>
        </div>
    </div>

</section>

<footer>
    <p>Términos y Condiciones</p>
    <p>Política de Cookies</p>
    <p>Política de Privacidad</p>
    <p>Términos #YESadidas</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>