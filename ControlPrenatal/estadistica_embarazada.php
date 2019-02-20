
<?php session_start();
if(isset($_SESSION['usuario'])){
	require 'vista/estadistica_embarazada_vista.php';
}else{
	header('Location: login.php');
}
?>

