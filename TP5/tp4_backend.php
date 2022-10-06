<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<h3>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>

<?php
    $numbers = [
        2, 4, 6, 8, 10, 12, 14, 16, 18, 20,
    ];
    foreach($numbers as $val){
        print "<p>Los primeros 10 numeros pares son: $val</p>\n";}

?>

<h3>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().</h3>

<?php

    $names = [ "Pedro", "Ana", 34, 1 ];
    print_r($names);

?>

<h3>3. Crear un array asociativo e introducir los siguientes
valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455</h3>

<?php

        $info = [ 'Nombre'=>"Pedro", 'Apellido'=>"Torres", 'Direccion'=>"Av. Mayor 3703", 'Telefono'=>"112233445" ];

?>

<h3>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h3>

<?php

        $cities = [ "Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago" ];
        foreach($cities as $indexcities => $city) {
            print "<p>La ciudad con el índice $indexcities tiene el nombre $city</p>";
        }

?>

<h3>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD</h3>

<?php

        $indexcities = [ 'MD'=>"Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=>"New York", 'LA'=>"Los Angeles", 'CCG'=>"Chicago" ];
        
        print "<p>El índice de $indexcities[MD] es MD.</p>";
        print "<p>El índice de $indexcities[NY] es NY.</p>";
        print "<p>El índice de $indexcities[LA] es LA.</p>";
        print "<p>El índice de $indexcities[CCG] es CCG.</p>";
        print "<p>El índice de $indexcities[LD] es LD.</p>";
?>

</body>
</html>