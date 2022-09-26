<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>1. Mostrar los números del 1 al 100.</h3>

<?php

// for ($i=1 ; $i<101 ; $i++) {
//     print "<p>Número: $i</p>\n";
// }

?>

<h3>2. Mostrar los números del 100 al 1.</h3>

<?php

// for ($i=101 ; $i>0 ; $i--) {
//     print "<p>Número: $i</p>\n";
// }

?>

<h3>3. Mostrar los números pares del 1 al 100.</h3>

<?php

// CON FOR IF :

// for ($num=2; $num<101 ; $num++) {
//     if (($num%2) == 0) {
//         print "<p>$num \n</p>";
//     }
// }


// CON WHILE IF :

// $num = 0;

// while ($num < 101) {
//     if (($num%2)==0) {
//         print "<p>$num </p>\n";
//     }
// $num++;
// }

?>

<h3>4. Mostrar los números impares del 1 al 100.</h3>

<?php

// for ($i=0 ; $i<101 ; $i++){
// 	if ( $i%2 != 0 ){
// 		echo $i.'<br />';
// 	}
// }

?>

<h3>5. Mostrar la suma de los números de 1 a 20.</h3>

<?php

// $suma = 0;

// for ($i=1 ; $i < 21 ; $i++) { 
//     $suma += $i;
// }

// print "El resultado de la suma de los números del 1 a 20 es : $suma ";

?>

<h3>6. Mostrar la suma de números pares de 1 a 20.</h3>
    
<?php

// FOR CON IF PARA SACAR LOS NUMEROS PARES :

// $suma = 0;

// for ($i=0 ; $i < 21 ; $i++) { 
//     if ($i%2==0) {
//     $suma += $i;
//     }
// }

// print "El resultado de la suma de numeros pares del 1 a 20 es : $suma ";


// FOR SIN IF, SUMANDOLE 2 A LA VARIABLE $i EN CADA PASADA :

// $suma = 0;

// for ($i = 0; $i < 21 ; $i = $i+2) {
//     $suma += $i;
// }

// print "El resultado de la suma de numeros pares del 1 a 20 es : $suma ";

?>

</body>
</html>