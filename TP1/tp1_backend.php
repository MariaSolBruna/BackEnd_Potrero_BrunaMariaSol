<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Trabajo practico N°1</h1>

<!-- <?php
    $mensaje = "Holis";
    echo $mensaje;

?>
<hr>
<?php

    $manzanas = 16;
    $naranjas = 20;
    $sumaFrutas = $manzanas + $naranjas;
    echo $sumaFrutas;

?> -->


<p>1. Imprima por pantalla: “Hola mundo”:</p>

<?php 
    echo "Hola Mundo";
?>

<hr>

<p>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla:</p>

<?php
    $message = "Hola Mundo";
    echo $message;
?>

<hr>

<p>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera:
</p>

<?php

    $num1 = 20;
    $num2 = 15;

    $suma = $num1 + $num2;
    print "Suma: $num1 + $num2 = $suma<br>";
  
    $resta = $num1 - $num2;
    print "Resta: $num1 - $num2 = $resta<br>";
  
    $mult = $num1 * $num2;
    print "Mutiplicación: $num1 * $num2 = $mult<br>";

    $divis = $num1 / $num2;
    print "División: $num1 / $num2 = $divis<br>";

    $resto = $num1 % $num2;
    print "Resto: $num1 % $num2 = $resto<br>";
   
?>

<hr>

<p>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla:</p>

<?php

    $celsius = 20;

    $fahrenheit = ($celsius * 9/5) + 32;
    print "Transformación de temperatura: ($celsius grados Celsius * 9/5) + 32 = $fahrenheit grados Fahrenheit"

?>

<hr>

<p>5. Implementar algoritmos que permitan:
    <br>
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
    <br>
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm:</p>

    <h4>Rectangulo</h4>
<?php

    $base = 18;
    $altura = 12;

    $perim = (2 * $base) + (2 * $altura);
    print "Perimetro: (2 * $base) + (2 * $altura) = $perim<br>";

    $area = $base * $altura;
    print "Area: $base * $altura = $area";

?>

    <h4>Circulo</h4>
<?php

    $radio = 30;
    $pi = 3.14;

    $perim2 = $pi * ($radio * 2);
    print "Perimetro: $pi * ($radio * 2) = $perim2<br>";

    $area2 = $pi * ($radio**2);
    print "Area: $pi * ($radio**2) = $area2";

?>

</body>
</html>