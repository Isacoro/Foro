<?php
session_start();
include_once 'model/conexion.php';

$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sentencia = $bd->prepare('SELECT * FROM usuario WHERE nombre = ? AND password = ?;');

$sentencia->execute([$usuario, $password]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);

if($datos === FALSE){
    header('Location: registro.php');

}elseif($sentencia->rowCount() == 1){
    $_SESSION['id_usuario'] = $datos->id_usuario;
    $_SESSION['nombre'] = $datos->nombre;
    header('Location: foro.php');
}