<?php session_start();
if(isset($_SESSION['usuario'])){
	require 'vista/consul_vista_usu.php';
}else{
	header('Location: login.php');
}
?>