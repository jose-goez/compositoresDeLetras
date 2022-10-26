<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
</head>

<body>

    <form action="" method="POST">
        <input type="text" placeholder="nombre" name="name">
        <input type="email" placeholder="email" name="email">
        <input type="text" placeholder="asunto" name="asunto">
        <textarea placeholder="mensaje" name="msg" id="" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>
    <?php
    include("correo.php");
    ?>

</body>

</html>