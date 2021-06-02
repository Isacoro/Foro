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
<h1 style="text-align: center; margin-top: 50px">TEMA MÚSICA</h1>

<?php
session_start();
include "model/conexion.php";


try{

    $sentencia = $bd->prepare('SELECT u.nombre, id_mensaje, m.id_usuario, id_tema, titulo, mensaje  FROM mensaje m 
    INNER JOIN usuario u on m.id_usuario = u.id_usuario WHERE id_tema = "1"');
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
            echo 'Tema abierto por: ' . $mensaje['nombre'] .  '</h3><br>';


            $idusuario = $mensaje['id_usuario'];
            $idmensaje = $mensaje['id_mensaje'];

            echo "<a href='eliminarMensaje.php?id_mensaje=$idmensaje&id_usuario=$idusuario'>Eliminar</a>";

    }
}

?>
<p style="margin-top: 50px" align="center"><a href="nuevoMensajeMusica.php">Nuevo mensaje</a></p>
</body>
</html>