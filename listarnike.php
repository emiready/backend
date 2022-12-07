<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listar</title>
</head>
<body>
    <table border="1">
<h1>TIENDA DE ROPA</h1>
    <button type="submit"><a href="index.html">inicio</a></button>
    <button type="submit" ><a href="buzos.php">buzos</a></button>
    <button type="submit" ><a href="nike.php">nike</a></button>
    <button type="submit" ><a href="precio.php">mayores a 500usd</a></button>
    <h2>Lista de ropa</h2>
    <p><b>ROPA EN STOCK NIKE</b></p>
    <tr>
        <th>ID</th>
        <th>TIPO DE ROPA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    <?php
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"emilianomodas");

    $consulta= "SELECT*FROM ropa WHERE marca = 'nike'";  

    $datos= mysqli_query ($conexion, $consulta);



    while ( $req =mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $req['id'];?></td>
        <td><?php echo $req['Tipodeprenda'];?></td>
        <td><?php echo $req['marca'];?></td>
        <td><?php echo $req['talle'];?></td>
        <td><?php echo $req['precio'];?></td>
        </tr>
   <?php } ?>
    </table>
</body>
</html>