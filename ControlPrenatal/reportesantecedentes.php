<?php session_start();
if(isset($_SESSION['usuario'])){
	require 'vista/lista_reportes_antecedentes_vista.php';
}else{
	header('Location: login.php');
}
?>