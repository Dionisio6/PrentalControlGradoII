<?php session_start();
require'admin/config.php';
require 'funciones.php';

if(!isset($_SESSION['usuario'])){
	header('Location: '.RUTA.'login.php');
	
}
$conexion= conexion($bd_config);
$admin= iniciarSession('usuarios', $conexion);

if ($admin['roll'] == 'administrador' ) {
require 'vista/contenido_vista.php';
}else{
	header('Location '.RUTA.'validar.php');

}

?>

