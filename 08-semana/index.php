<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
    <form id="frm_estudiante">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" id="lastname">
        <label for="email">Correo</label>
        <input type="text" name="email" id="email">
        <label for="desc">Descripición</label>
        <input type="text" name="desc" id="desc">


        <input type="submit" value="Enviar">
    </form>


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