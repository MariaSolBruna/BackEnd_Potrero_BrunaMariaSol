<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Trabajo practico N°2</h1>

<p>1. Crear una variable n y validar que sea un numero positivo:</p>

<?php

    $numX = -2;

    if ($numX > -1) {
        echo "$numX es un numero positivo";
    } else {
        echo "$numX es un numero negativo";
    }

?>

<hr>

<p>2. Crear una variable n y validar que sea un numero mayor a 1 y menor a 10:</p>

<?php

    $numY = 7;

    if ($numY > 1 & $numY < 10) {
        echo "$numY es mayor a 1 y menor a 10";
    } else {
        echo "$numY NO es mayor a 1 y menor a 10";
    }

?>

<hr>

<p>3. Crear una variable n y validar que sea un numero mayor a 10 o menor a 2:</p>

<?php

    $numZ = 9;

    if ($numZ < 2 || $numZ > 10) {
        echo "$numZ es mayor a 10 o es menor a 2";
    } else {
        echo "$numZ NO es mayor a 10 o menor a 2";
    }

?>

<hr>

<p>4. Crear dos variables, una con un nombre numero1 y otra con el nombre de numero2. Si numero1 es mayor a numero2, mostrar por pantalla la suma y la resta. Si numero2 es mayor numero1, mostrar por pantalla la multiplicacion, la division entera y el resto de la division. Si numero1 y numero2 son iguales, mostrar el siguiente mensaje: "Los numeros ingresados son iguales".</p>

<?php

    $numero1 = 85;
    $numero2 = 95;

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $mult = $numero2 * $numero1;
    $divis = round($numero2 / $numero1);
    $rest = $numero2 % $numero1;

    if ($numero1 > $numero2) {
        // echo $numero1 + $numero2;
        echo "La suma de ambos numeros es: $numero1 + $numero2 = $suma. 
            <br>La resta de ambos numeros es: $numero1 - $numero2 = $resta";
    } elseif ($numero2 > $numero1) {
        echo "La multiplicación de ambos numeros es: $numero2 * $numero1 = $mult.
            <br>La división de ambos numeros es: $numero2 / $numero1 = $divis.
            <br>El resto de dividir ambos numeros es: $numero2 % $numero1 = $rest.";
    } else {
        echo "Los numeros ingresados son iguales";
    }

?>

</body>
</html>