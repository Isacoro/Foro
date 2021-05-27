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
<body>
<h1 style="text-align: center; margin-top: 50px">TEMA LIBROS</h1>

<?php
session_start();
include "model/conexion.php";

try{

    $sentencia = $bd->prepare('SELECT u.nombre, titulo, mensaje  FROM mensaje m INNER JOIN usuario u on m.id_usuario = u.id_usuario WHERE id_tema = "4"');
    $sentencia->execute();

    $resultado = $sentencia->rowCount();

}catch (PDOException $e){
    echo "ERROR: " . $e->getMessage();
}

   echo '<div style="padding: 10px; margin: 50px; margin-bottom: 150px; border-style: double">';
     while($resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC)){
         foreach ($resultado as $mensaje){
            echo '<h3><br>' . $mensaje['titulo'] . '</h3>';
            echo $mensaje['mensaje'] . '<br>';
            echo '<div style="margin-top: 10px">';
            echo " Tema abierto por: " . $mensaje['nombre'] .  '</h3><br>';
    }
}

?>
<p style="margin-top: 50px" align="center"><a href="nuevoMensajeLibros.php">Nuevo mensaje</a></p>
</body>
</html>