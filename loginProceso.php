<?php
session_start();
include_once 'model/conexion.php';


$usuario = $_POST['usuario'];
$password = $_POST['password'];


/** @var TYPE_NAME $bd */
$sentencia = $bd->prepare('SELECT * FROM usuarios WHERE nombre = ? AND password = ?;');

$sentencia->execute([$usuario, $password]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);

if($datos === FALSE){
    echo "Usuario o contraseña incorrecta";
}elseif($sentencia->rowCount() == 1){
    $_SESSION['nombre'] =$datos->nombre;
    header('Location: foro.php');
}