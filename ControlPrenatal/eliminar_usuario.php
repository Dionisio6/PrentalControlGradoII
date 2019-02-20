<?php
	$errores='';
	extract ($_REQUEST);
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}
	$id = isset($_GET['id']) ? $_GET['id']:0;
$sql='UPDATE  usuarios SET status = 0 WHERE id = ?';

	$statemen = $conexion->prepare($sql);
	$statemen->execute(array($id));
	$results= $statemen->fetchAll();

	header('Location: usuarios.php');

	
?>