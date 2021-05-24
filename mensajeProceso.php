<?php
session_start();
include_once 'model/conexion.php';

$usuario = $_POST['txtNombre'];
$email = $_POST ['txtEmail'];
$password = $_POST['txtPassword'];

/** @var TYPE_NAME $bd */
$sentencia = $bd->prepare('INSERT INTO usuarios(nombre, password, email) VALUES(?,?,?)');
$resultado = $sentencia->execute([$usuario, $password, $email]);

if($resultado === true){
    header('Location: foro.php');

}else{
    echo "No se ha podido hacer el registro, inténtalo de nuevo";
    header('Location: registro.php');
}