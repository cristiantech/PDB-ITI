<?php
require_once "conexion.php";

$mysql = new Conexion();
$conn = $mysql->connect();

// $data = [
//     $_POST['name'],
//     $_POST['lastname'],
//     $_POST['email'],
//     $_POST['desc'],
// ];

// $insert = "insert into estudiantes (name,lastname,email,description) values('$data[0]', '$data[1]', '$data[2]', '$data[3]');";

$update = "update estudiantes set name='juancarlos' where id_estudiante = 1";
$sendUpdate = mysqli_query($conn, $update);
// echo json_encode($send);
if($sendUpdate) { 
    echo json_encode("actulizo");
}else{
    echo json_encode("no conectado");
}
