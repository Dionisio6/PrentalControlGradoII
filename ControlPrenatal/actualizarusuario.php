<?php session_start();
	if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
	}
	require 'funciones.php';
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
	}catch(PDOException $e){
		echo "ERROR: " . $e->getMessge();
		die();
	}
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$usuario = limpiarDatos($_POST['usuario']);
    $nombres =limpiarDatos ($_POST['nombres']);
    $apellidos = limpiarDatos ($_POST['apellidos']);
    $Roll = limpiarDatos ($_POST['Roll']);

		
		$statement = $conexion->prepare(
		"UPDATE usuarios
        SET usuario = :usuario, 
		nombres =:nombres, 
		apellidos =:apellidos, 
		Roll =:Roll 
		WHERE id = :id");

		$statement ->execute(array(
        ':usuario'=>$usuario, 
		':nombres'=>$nombres, 
		':apellidos'=>$apellidos,  
		':Roll'=>$Roll, 
		
        ':id'=> $id
        ));
        
        header('Location: usuarios.php');
	}else{
		$id_usuario = id_numeros($_GET['id']);
		if(empty($id_usuario)){
			header('Location: usuarios.php');
		}
		$user = obtenerUser_id($conexion,$id_usuario);
		
		if(!$user){
			header('Location: usuarios.php');
		}
		$user =$user[0];
	}
	require 'vista/actualizarusuario.php';
?>