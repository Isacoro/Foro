<?php
session_start();
include 'model/conexion.php';

if (isset($_POST['insertar'])){

    $idusuario = $_SESSION['id_usuario'];
    $titulo = $_POST['titulo'];
    $mensaje = $_POST['mensaje'];
    $idtema = 2;

    $sql = "INSERT INTO mensaje (titulo, mensaje, id_usuario, id_tema) VALUES (:titulo, :mensaje, :id_usuario, :id_tema)";

    $sql = $bd->prepare($sql);

    $sql->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    $sql->bindParam(':mensaje', $mensaje, PDO::PARAM_STR);
    $sql->bindParam(':id_usuario', $idusuario, PDO::PARAM_INT);
    $sql->bindParam(':id_tema', $idtema, PDO::PARAM_INT);

    $sql->execute();

    $lastInsertId = $bd->lastInsertId();
    if ($lastInsertId > 0){
        header('Location: temaJuegos.php');
    }else{
        echo "No se ha podido guardar el mensaje";

        print_r($sql->errorInfo());
    }
}

