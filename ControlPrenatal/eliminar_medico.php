<?php
	$errores='';
	extract ($_REQUEST);
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}
	$idMedico = isset($_GET['idMedico']) ? $_GET['idMedico']:0;
$sql='UPDATE  medicos SET status = 0 WHERE idMedico = ?';

	$statemen = $conexion->prepare($sql);
	$statemen->execute(array($idMedico));
	$results= $statemen->fetchAll();

	header('Location: medicos.php');

	
?>