<?php
$usuario = $_POST["user"];
$contrasenia = $_POST["pass"];

$checkuser ="admin";
$checkpass ="1234";

if ($usuario == $checkuser && $contrasenia == $checkpass) {
   echo "correcto" ;

}
 else { echo "incorrecto";
 }


?>