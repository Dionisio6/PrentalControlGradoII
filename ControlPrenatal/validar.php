<?php
session_start();
require'admin/config.php';
require 'funciones.php';

//comprobar session

if (!isset($_SESSION['usuario'])) {
header('Location: '.Ruta.'login.php');

}
//validar datos privilegio
$conexion = conexion($bd_config);
$usuario= iniciarSession('usuarios', $conexion);

if ($usuario['roll'] == 'administrador') {

header('Location: '.RUTA.'CenterMedicine.php');

}elseif ($usuario['roll'] == 'limitado') {
header('Location: '.RUTA.'CenterMedicineusu.php');

}else{
header('Location: '.RUTA.'login.php');
}



  ?>