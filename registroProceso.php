<?php
session_start();
include_once 'model/conexion.php';

$usuario = $_POST['nombre'];
$email = $_POST ['email'];
$password = $_POST['password'];

$sentencia = $bd->prepare('INSERT INTO usuario(nombre, password, email) VALUES(?,?,?)');
$resultado = $sentencia->execute([$usuario, $password, $email]);

if($resultado === true){
    header('Location: index.php');

}else{
    echo "No se ha podido hacer el registro, inténtalo de nuevo";
    header('Location: registro.php');
}