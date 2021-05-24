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
<h1 style="text-align: center; margin-top: 50px">TEMA JUEGOS</h1>

<?php
include "model/conexion.php";


try{
    /** @var TYPE_NAME $bd */
    $sentencia = $bd->prepare('SELECT u.nombre, titulo, mensaje  FROM temas t INNER JOIN usuarios u on t.id_usuario = u.id_usuario WHERE tema = "Juegos"');
    $sentencia->execute();

    $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
   echo '<div style="padding: 10px; margin: 50px; margin-bottom: 150px; border-style: double">';
        foreach ($resultado as $temas){
        echo '<h3><br>' . $temas['titulo'] . '</h3>';
        echo $temas['mensaje'] . '<br>';
        echo '<div style="margin-top: 10px">';
        echo " Tema abierto por: " . $temas['nombre'] .  '</h3><br>';
    }
}catch (PDOException $e){
    echo "ERROR: " . $e->getMessage();
}
?>



<footer style="margin-top: 350px">
    <a href="#">Términos y condiciones de uso</a><br>
    <label>&reg; IRC</label>
</footer>
</body>
</html>