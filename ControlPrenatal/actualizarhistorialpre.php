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
		$identificacion = limpiarDatos($_POST['identificacion']);
	   $nombre = limpiarDatos($_POST['nombre']);
		$apellidos = limpiarDatos($_POST['apellidos']);
		$numerohistoria = limpiarDatos($_POST['numerohistoria']);
		$nacionalidad = limpiarDatos($_POST['nacionalidad']);
		$edad = limpiarDatos($_POST['edad']);
		$peso = limpiarDatos($_POST['peso']);
		$talla = limpiarDatos($_POST['talla']);
	    $grupos = limpiarDatos($_POST['grupos']);
	    $toxoide = limpiarDatos($_POST['toxoide']);
		$fuma = limpiarDatos($_POST['fuma']);
		$hiv = limpiarDatos($_POST['hiv']);
	    $exclini = limpiarDatos($_POST['exclini']);
		$exmama = limpiarDatos($_POST['exmama']);
        $exodon = limpiarDatos($_POST['exodon']);
		 $expelv = limpiarDatos($_POST['expelv']);
			$expapan = limpiarDatos($_POST['expapan']);
			$excolon = limpiarDatos($_POST['excolon']);
			$excervix = limpiarDatos($_POST['excervix']);
			$vdrl = limpiarDatos($_POST['vdrl']);
			$vdrlf = limpiarDatos($_POST['vdrlf']);
			$glise = limpiarDatos($_POST['glise']);
			$urea = limpiarDatos($_POST['urea']);
			$hosp = limpiarDatos($_POST['hosp']);
			$trasl = limpiarDatos($_POST['trasl']);
			$traslf = limpiarDatos($_POST['traslf']);
			$traslugar = limpiarDatos($_POST['traslugar']);
			$gruposp = limpiarDatos($_POST['gruposp']);
			$vdrlp = limpiarDatos($_POST['vdrlp']);
		$vdrlp = limpiarDatos($_POST['vdrlpf']);
		$obser = limpiarDatos($_POST['obser']);



		
		$statement = $conexion->prepare(
		"UPDATE historiaperinatal
        SET identificacion = :identificacion, 
		nombre =:nombre,
		apellidos =:apellidos, 
		numerohistoria =:numerohistoria, 
		nacionalidad =:nacionalidad, 
		edad =:edad,
		peso =:peso,
		 talla =:talla,
		grupos =:grupos,
		toxoide =:toxoide,
		fuma =:fuma,
	    hiv =:hiv,
		exclini =:exclini,
		exmama =:exmama,
		exodon =:exodon,
		expelv =:expelv,
	    expapan =:expapan,
		excolon =:excolon,
		excervix =:excervix,
		 vdrl =:vdrl,
		vdrlf =:vdrlf,
	    glise =:glise,
		urea =:urea,
		hosp =:hosp,
		trasl =:trasl,
	    traslf =:traslf,
	    traslugar =:traslugar,
		gruposp =:gruposp,
		vdrlp =:vdrlp,
		vdrlpf =:vdrlpf,
		obser =:obser

		WHERE idembara = :id");

		$statement ->execute(array(
        ':identificacion'=>$identificacion, 
		':nombre'=>$nombre, 
		':apellidos'=>$apellidos, 
		':numerohistoria'=>$numerohistoria, 
		':nacionalidad'=>$nacionalidad, 
		':edad'=>$edad,
		':peso'=>$peso,
	    ':talla'=>$talla,
		':grupos'=>$grupos,
		':toxoide'=>$toxoide,
		':hiv'=>$hiv,
		':fuma'=>$fuma,
		':exclini'=>$exclini,
		':exmama'=>$exmama,
		 ':exodon'=>$exodon,
		':expelv'=>$expelv,
		 ':expapan'=>$expapan,
		 ':excolon'=>$excolon,
		 ':excervix'=>$excervix,
		 ':vdrl'=>$vdrl,
		 ':vdrlf'=>$vdrlf,
		':glise'=>$glise,
	    ':urea'=>$urea,
		':hosp'=>$hosp,
		':trasl'=>$trasl,
		 ':traslf'=>$traslf,
		':traslugar'=>$traslugar,
		 ':gruposp'=>$gruposp,
		':vdrlp'=>$vdrlp,
		':vdrlpf'=>$vdrlpf,
		':obser'=>$obser,


        ':id'=> $id
        ));
        header('Location: prenatal.php');
	}else{
		$id_embara = id_numeros($_GET['idembara']);
		if(empty($id_embara)){
			header('Location: prenatal.php');
		}
		$embara = obtener_embara_id($conexion,$id_embara);
		
		if(!$embara){
			echo '<script>alert("Historia Actualizada  Exitozamente")</script> ';
		echo "<script>location.href='prenatal.php'</script>";
		}
		$embara =$embara[0];
	}
	require 'vista/actualizarhistoriap.php';
?>