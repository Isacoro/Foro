<?php
session_start();
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
    <form method="POST" action="loginProceso.php">

        <h2>Iniciar Sesión</h2>

        <input type="text" placeholder="Usuario" name="usuario">
        <input type="password" placeholder="Contraseña" name="password">

        <p><input type="submit" value="Iniciar Sesión"></p>
    </form>
</section>
<footer>
    <a href="#">Términos y condiciones de uso</a><br>
    <label>&reg; IRC</label>
</footer>
</body>
</html>