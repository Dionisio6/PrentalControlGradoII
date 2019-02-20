<?php session_start();
if(isset($_SESSION['usuario'])){
	require 'vista/estadistica_medico_vista.php';
}else{
	header('Location: login.php');
}
?>

