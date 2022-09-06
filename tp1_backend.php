<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

  <h1> EJERCICIOS  </h1>

<?php  

echo   "Hola Mundo";

?>
<br> <hr>

<?php  

$saludo = "Hola Mundo";

echo $saludo;

?>
<br> <hr>
 
<?php  

$bananakg = 130;

$tomatekg = 250; 


echo "Suma:" . $bananakg + $tomatekg; 

?>
<br> <hr>
 
<?php  


echo "Resta:" .  $bananakg - $tomatekg; 
?>
<br> <hr>
 
<?php  

echo "Division:" . $tomatekg / 2;

?>
<br> <hr>
 
<?php  
echo "Resto:" . $bananakg % 130; 

?>
<br> <hr>
 
<?php 

$celsius = 20 ;

$fahrenheit =  ($celsius * 9/5) + 32; 

echo  "Celsius a Fahrenheit:"  . $fahrenheit  


?>
<br> <hr>


<?php  

$base = 18;

$altura = 12;

$perimetro = ($base + $altura) + ($base + $altura)  ;

$area = $base * $altura; 

echo "Perimetro de un Rectangulo:" . $perimetro;

?> 
<br> <hr>

<?php

echo "Area de un Rectangulo:" . $area

?>

<br> <hr>

<?php

$radio = 30;

$pi= 3.14159265359;

$perimetrocirculo= $pi * ($radio * 2);

echo "Perimetro de un Circulo: " . $perimetrocirculo;

?>

<br> <hr>

<?php

$areadeuncirculo = $pi * ($radio * $radio);

echo "Area de un Circulo: " .  $areadeuncirculo;

?>

<br> <hr>

</body>
</html>