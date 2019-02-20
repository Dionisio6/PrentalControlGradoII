<?php
	$errores='';
	extract ($_REQUEST);
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}
	$idconsul = isset($_GET['idconsul']) ? $_GET['idconsul']:0;
$sql='UPDATE  historiaperinatal SET status = 0 WHERE idconsul = ?';

	$statemen = $conexion->prepare($sql);
	$statemen->execute(array($idconsul));
	$results= $statemen->fetchAll();

	header('Location: prenatal.php');

	
?>