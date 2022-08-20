<?php
require_once "./server/conexion.php";
$mysql = new Conexion();
$conn = $mysql->connect();

$query = "select name,lastname,email,description from estudiantes;
";
$sendData = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Este es un sitio de producto genial">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>Estudiante 🗽</title>
</head> 
    
    <nav>
        <a href="index.html"><img src="images/logo.png" alt=""></a>
        <ul>
            <li>
                <a href="#">Estudiante</a></li>
            <li>
            <a href="#">Asignaturas</a></li>
        </ul>
    </nav>

<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="modulo_pago">
                    <div class="modulo_pago_images">
                        <img src="images/student.png" alt="">
                    </div>
                    <h3>Estudiantes</h3>
                    <p>Miles de estudiantes hay en el ITI, pero nada como una caja con gatitos</p>
                </div>
            </div>
            <div class="col-8">
                <div class="modulo_pago">
                    <form id="frm_estudiante">
                        <label for="name">Nombre</label>
                        <br>
                        <input type="text" id="name" name="name">
                        <br>
                        <label for="name">Apellido</label>
                        <br>
                        <input type="text" id="lastname" name="lastname">
                        <br>
                        <label for="email">E-mail</label>
                        <br>
                        <input type="text" id="email" name="email">
                        <br>
                        <label for="text">Descripción</label>
                        <br>
                        <input type="text" id="desc" name="desc">

                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <table class="table table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($data = mysqli_fetch_row($sendData)):?>
                        <tr>
                            <td><?= $data[0]; ?></td>
                            <td><?= $data[1]; ?></td>
                            <td><?= $data[2]; ?></td>
                            <td><?= $data[3]; ?></td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>

<footer>
    <div class="option">Términos y condiciones</div>
    <div class="option">contacto@davops.com</div>
</footer>

<script>
    const frm = document.querySelector('#frm_estudiante');

    const sendData = async (e) =>{
    e.preventDefault();
    const form = new FormData(frm);
    const response = await fetch('./server/estudiante.php', {
        method: 'POST',
        body: form,
    });
    const data = await response.json();
    console.log(data);
};

frm.addEventListener('submit', sendData);
</script>
</body> 
</html> 