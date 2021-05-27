<?php
session_start();

if(!isset($_SESSION['id_usuario'])){
    echo "Inicia sesión para agregar un comentario";
    exit;
}

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
<h1 style="text-align: center; margin-top: 40px">Nuevo Mensaje de Películas</h1>

<section>
    <form method="post" action="mensajeProcesoPeliculas.php">


        <input type="text" name="titulo" id="titulo" placeholder="Añade un título">
        <input type="text" name="mensaje" id="mensaje" placeholder="Escribe aquí tu mensaje">

        <br><br>
        <input type="submit" name="insertar" value="Añadir mensaje">
    </form>
</section>

<footer style="margin-top: 250px">
    <a href="#">Términos y condiciones de uso</a><br>
    <label>&reg; IRC</label>
</footer>
</body>
</html>






