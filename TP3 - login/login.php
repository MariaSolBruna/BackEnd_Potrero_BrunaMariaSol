<?php
// Se debe traer desde html los datos que el usuario ingrese desde los inputs. Para eso se utiliza POST y se llama a name="user" y a name="pass". Luego se crean dos variables (las check) para verificar que lo que viene de los inputs coincida con los datos que ya tenemos en esas dos variables. Con el if se valida que sean iguales.

$dataUser = $_POST ["user"];
$dataPass = $_POST ["pass"];

$checkUser = "admin";
$checkPass = "12345";

if ($dataUser==$checkUser && $dataPass==$checkPass) {
    header ("location: logged.html");
} else {
    header ("location: error.html");
}



?>