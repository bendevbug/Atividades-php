<?php 

$usuario = 'root';
$senha = 'sofia007';
$database = 'db_user';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysql->error) {
	die();
}
?>