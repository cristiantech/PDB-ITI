<?php

$nombre = $_POST["nombre"];

$sani = htmlentities($nombre);

// if( isset($_POST["nombre"])){
//     echo "existo";
// }else{
//     echo "no existo";
// }

// if( empty($_POST["nombre"])){
//     echo "si hay datos";
// }else{
//     echo "mo hay datos";
// }


// htmlentities

// //recibiendo mi imagen del formulario
// $imagen = $_FILES["juanita"];
// //obteniendo el nombrre
// $nameImgen = $imagen["name"];
// //obteniendo la ruta de origin
// $rutadeOrigin = $imagen["tmp_name"];
// //Crear la rura en donde va estar almacenada nuesta imagen.
// $rutaFinal = "images/$nameImgen";

// move_uploaded_file($rutadeOrigin, $rutaFinal);

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p> <?php echo  $$sani ?> </p>
</body>
</html>


