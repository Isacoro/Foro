<?php
$nombrebd = 'miforo';
$usuario = 'root';
$password = '';

try {
$bd = new PDO ('mysql:host=localhost; dbname=' . $nombrebd, $usuario, $password);
}catch (PDOException $e){
$e->getMessage("Error de conexión");
}