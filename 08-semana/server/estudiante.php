<?php
require_once "conexion.php";

$mysql = new Conexion();
$conn = $mysql->connect();

$data = [
    $_POST['name'],
    $_POST['lastname'],
    $_POST['email'],
    $_POST['desc'],
];

$query = "insert into estudiantes (name,lastname,email,description) values('$data[0]', '$data[1]', '$data[2]', '$data[3]');";

$send = mysqli_query($conn, $query);
// echo json_encode($send);
if($send) { 
    echo json_encode("se ingreso correctamente");
}else{
    echo json_encode($query);
}
