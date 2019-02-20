<?php session_start();
if(isset($_SESSION['usuario'])){
	require 'vista/estadistica_mes_vista_usu.php';
}else{
	header('Location: login.php');
}
?>

