<?php
include 'model/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tu foro</title>
    <meta charset="UTF-8">
    <link href="css/estiloindex.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header>
    <?php
    include 'header.php';
    ?>
</header>
<section>
    <form method="POST" action="registroProceso.php">

        <h2>Registro</h2>
        <h4>Regístrate para entrar al foro</h4>


        <input type="text" placeholder="Usuario" name="txtNombre">
        <input type="email" placeholder="Email" name="txtEmail">
        <input type="password" placeholder="Introduce contraseña" name="txtPassword">

        <p><input type="submit" value="Crear cuenta"></p>
    </form>
</section>
<footer>
    <a href="#">Términos y condiciones de uso</a><br>
    <label>&reg; IRC</label>
</footer>
</body>
</html>
