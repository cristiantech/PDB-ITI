<?php

//whilw

    //Ejercicio
    // $a = 0;
    // while ($a <= 10) {
    //     $res = 4 * $a;
    //     echo("La multiplacionde 4 * $a es $res\n");
    //     $a++;
    // }

//do while
$frutas = ['pera', 'manzana', 'mandarina'];

do {
    
    $fr = readline("⌚  Ingrese una fruta ");
  

} while (in_array($fr,$frutas));
array_push($frutas,$fr);
print_r($frutas);
//for
for ($i=0; $i < count(); $i++) { 
    # code...
}
//forEach

//Funciones