<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

  <h1> EJERCICIOS 2 </h1>

<?php  

$numero = 4 ;

if ($numero > 0) {
    echo "1.  " . $numero  . " es un numero positivo";
};

?>
<hr>

<?php

if ($numero > 1 && $numero < 10) {
    echo "2.  " . $numero  . " es un numero mayor a 1 y menor a 10.";
};


?>
<hr>

<?php

if ($numero > 10  || $numero < 2) {
    echo "3.  " . $numero  . " es número mayor a 10 o menor a 2.";
}

else  echo "3.  " . $numero  . " no es número mayor a 10 o menor a 2.";


?>
<hr>

<?php

$numero1 = 10;

$numero2= 5;

$suma = $numero1 + $numero2;

$resta = $numero1 - $numero2;

$multiplicacion = $numero1 * $numero2;

$division = $numero1 / $numero2;

$resto = $numero1 % $numero2; 

$numerosIguales = "Los numeros ingresados son iguales";

if ($numero1 > $numero2) {
    echo "4. " . "La suma de 10 mas 5 nos da : " . $suma . " y la resta de 10 menos 5 nos da : " .  $resta ;
}

else if ($numero2 > $numero1) {
    
 echo "4. " . "La multiplicacion de 10 por 5 nos da : " . $multiplicacion . " , la division de 10 dividido 5 nos da : " .  $division .  " , y el resto de 10 dividido 5 nos da : " . $resto;
}

else {
    echo "4. " . $numerosIguales;
}

?>
<hr>

