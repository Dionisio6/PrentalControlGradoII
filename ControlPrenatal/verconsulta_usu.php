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
		$id = limpiarDatos($_POST['id']);
		$identificacion= limpiarDatos($_POST['identificacion']);
		$apellidos = limpiarDatos($_POST['apellidos']);
	    $nombre = limpiarDatos($_POST['nombre']);
		$edad = limpiarDatos($_POST['edad']);
		$fechacon=limpiarDatos($_POST['fechacon']);
		$peso = limpiarDatos($_POST['peso']);
		$tenar = limpiarDatos($_POST['tenar']);
		$alut = limpiarDatos($_POST['alut']);
		$presen = limpiarDatos($_POST['presen']);
		$fcf = limpiarDatos($_POST['fcf']);
		$movf = limpiarDatos($_POST['movf']);
		$ede = limpiarDatos($_POST['ede']);
		$vari = limpiarDatos($_POST['vari']);
	    // $medicos = limpiarDatos($_POST['medicos']);
		$obser = limpiarDatos($_POST['obser']);
		
		$statement = $conexion->prepare(
		"SELECT consulta
        SET identificacion = :identificacion, 
        nombre=:nombre,
	    apellidos =:apellidos,
	    edad =:edad,
	    fechacon=:fechacon,
	    peso =:peso,
	    tenar =:tenar,
	    alut =:alut,
	    presen =:presen,
	    fcf =:fcf,
	    movf =:movf,
	    ede =:ede,
	    vari =:vari,
	    -- medicos=:medicos,
	    obser =:obser
		

		



		WHERE idconsul = :id");

		$statement ->execute(array(
        ':identificacion'=>$identificacion,
        ':nombre'=>$nombre,
        ':apellidos'=>$apellidos,
        ':edad' =>$edad,
        ':fechacon'=>$fechacon,
        ':peso' =>$peso,
         ':tenar' =>$tenar,
         ':alut' =>$alut,
         ':presen' =>$presen,
        ':fcf' =>$fcf,
        ':movf' =>$movf,
        ':ede' =>$ede,
        ':vari' =>$vari,
        // ':medicos'=>$medicos,
        ':obser' =>$obser,







        ':id'=>$id
		
        ));
      
	}else{
		$id_consulta = id_numeros($_GET['idconsul']);
		if(empty($id_consulta)){
			header('Location: verconsulta.php');
		}
		$consulta = obtener_consulta_id($conexion,$id_consulta);
		
		if(!$consulta){
			header('Location: verconsulta_usu.php');
		}
		$consulta=$consulta[0];
	}
	require 'vista/verconsultavista_usu.php';
?>