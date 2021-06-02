<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    echo "No has iniciado sesión. No puedes borrar este mensaje";
    exit();
}


include 'model/conexion.php';

if (isset($_GET['id_mensaje']) && is_numeric($_GET['id_mensaje'])) {

    if (isset($_GET['id_usuario']) == $_SESSION['id_usuario']) {

        $idmensaje = $_GET['id_mensaje'];
        $idusuario = $_SESSION['id_usuario'];

        try {

            $sql = "DELETE FROM mensaje where id_mensaje = :id_mensaje and id_usuario = :id_usuario";
            $statement = $bd->prepare($sql);
            $statement->bindParam(':id_mensaje', $idmensaje, PDO::PARAM_INT);
            $statement->bindParam(':id_usuario', $idusuario, PDO::PARAM_INT);
            $statement->execute();

            if ($statement->rowCount() == 1){
                echo "Mensaje eliminado con éxito";

            }else{
                echo "No puedes borrar un mensaje que no es suyo";
            }


        } catch (PDOException $e) {
            echo "Error al eliminar el mensaje" . $e->getMessage();
        }
    }
}else{
    echo "El mensaje no existe";
}

