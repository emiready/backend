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


$i = 1;

while ($i <= 100 ) {
      print "<p>$i</p>";
      $i++;

} 

?>

<h3> 2. Mostrar los números del 100 al 1. </h3>


<?php 



$i = 100;

while ($i <= 100 && $i >0) {
      print "<p>$i</p>";
      $i--;

} 

?>

<h3>3. Mostrar los números pares del 1 al 100.</h3>

<?php 



$i = 2;

while ($i <= 100 ) {
    print "<p>$i</p>";
    $i+=2;

} 

?>


<h3> 4. Mostrar los números impares del 1 al 100. </h3>

<?php 



$i = 1;

while ($i <= 100 ) {
    print "<p>$i</p>";
    $i+=2;

} 

?>


<h3> 5. Mostrar la suma de los números de 1 a 20. </h3>

<?php 


$suma= 1 ;

for ($i=0; $i < 20 ; $i++) { 

    echo "La suma de los numeros es : $suma + $i = ", $suma + $i, "<br>"  ;

}


?>


<h3> 6. Mostrar la suma de números pares de 1 a 20. </h3>

<?php 


$suma= 2 ;

for ($i=0; $i < 20 ; $i+=2) { 

    echo "La suma de los numeros es : $suma + $i = ", $suma + $i, "<br>"  ;

}


?>




</body>
</html>


