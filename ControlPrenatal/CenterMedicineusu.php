<?php session_start();
require'admin/config.php';
require 'funciones.php';

if(!isset($_SESSION['usuario'])){
	header('Location: '.RUTA.'login.php');
	
}
$conexion= conexion($bd_config);
$limitado= iniciarSession('usuarios', $conexion);

if ($limitado['roll']  == 'limitado' ) {
require 'vista/contenido_vista_usu.php';
}else{
	header('Location '.RUTA.'validar.php');

}

?>