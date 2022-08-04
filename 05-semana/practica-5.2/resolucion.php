<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

$array = [$numero1,$numero2,$numero3];

function validar($numero){
    if ($numero > $res) {
        $res = $numero;
    }
    return $res;
}
$resultado = 0;
for ($i=0; $i < count($array) ; $i++) { 
    $resultado = validar($array[$i]);
    echo $resultado;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $resultado ?></p></p>
</body>
</html>
