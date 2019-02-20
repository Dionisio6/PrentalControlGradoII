<?php session_start();
if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$nombre = filter_var(strtolower($_POST['nombres']),FILTER_SANITIZE_STRING);
	$apellidos = $_POST['apellidos'];
	$correo =  $_POST['correo'];
	
	$identificacion =  $_POST['identificacion'];
	$telefono =  $_POST['telefono'];
	
	if(empty($nombre) or empty($apellidos)  or empty($identificacion)){
			print "<script>alert(\"Agregue los Datos correctamente.\");window.location='agregarmedicos.php';</script>";
		
	}
	else{	
		try{
			$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
		}catch(PDOException $e){
			echo "Error: ". $e->getMessage();
			die();
		}

		$statement = $conexion -> prepare(
			'SELECT * FROM medicos WHERE idMedico = :id LIMIT 1');
		$statement ->execute(array(':id'=>$identificacion));
		$resultado= $statement->fetch();

		if($resultado != false){
			echo '<script>alert("Usuario ya Existe")</script> ';

		}
	}
	if($mensaje==''){
		$statement = $conexion->prepare(
		'INSERT INTO medicos (idMedico,medidentificacion,mednombres,medapellidos,medtelefono,medcorreo)
		values(null, :id,:nombre,:apellidos,:telefono,:correo)');

		$statement ->execute(array(
		':id'=>$identificacion,
		':nombre'=> $nombre,
		':apellidos'=>$apellidos,
		':telefono'=>$telefono,
		':correo'=>$correo
		));
		echo '<script>alert("Medico Agregado Con Exito")</script> ';
		echo "<script>location.href='medicos.php'</script>";
	}
}
require 'vista/agg_medicos_vista.php';
?>