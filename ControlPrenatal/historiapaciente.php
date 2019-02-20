<?php session_start();
if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$nombre = filter_var(strtolower($_POST['nombre']),FILTER_SANITIZE_STRING);
	$numerohistoria =  $_POST['numerohistoria'];
	$apellidos = $_POST['apellidos'];
	$identificacion =  $_POST['identificacion'];
	$nacionalidad =  $_POST['nacionalidad'];
	$edad =  $_POST['edad'];
	$domicilio = $_POST['domicilio'];
	$localidad = $_POST['localidad'];
	$telefono = $_POST['telefono'];
	$fechanac= $_POST['fechanac'];
	$estudios= $_POST['estudios'];
	$edocivil= $_POST['edocivil'];
    $peso =  $_POST['peso'];
	$talla =  $_POST['talla'];
	$fum =  $_POST['fum'];
	$fpp =  $_POST['fpp'];
	$grupos =  $_POST['grupos'];
	$antiru =  $_POST['antiru'];
	$toxoide =  $_POST['toxoide'];
	$fuma =  $_POST['fuma'];
	$droga =  $_POST['droga'];
	$alcohol =  $_POST['alcohol'];
	$hiv =  $_POST['hiv'];
	$exclini =  $_POST['exclini'];
	$exmama =  $_POST['exmama'];
	$exodon =  $_POST['exodon'];
    $expelv =  $_POST['expelv'];
    $expapan =  $_POST['expapan'];
    $excolon =  $_POST['excolon'];
    $excervix =  $_POST['excervix'];
    $toxoplasmosis=  $_POST['toxoplasmosis'];
 	$vdrl=  $_POST['vdrl'];
	$vdrlf=  $_POST['vdrlf'];
	$glise=  $_POST['glise'];
	$urea=  $_POST['urea'];
	$hosp=  $_POST['hosp'];
	$trasl=  $_POST['trasl'];
	$traslf=  $_POST['traslf'];
	$traslugar=  $_POST['traslugar'];
	$gruposp=  $_POST['gruposp'];
	$vdrlp=  $_POST['vdrlp'];
	$vdrlpf=  $_POST['vdrlpf'];
	$sifilis=  $_POST['sifilis'];
	$obser=  $_POST['obser'];
	 $mensaje='';
	if(empty($nombre) or empty($apellidos)  or empty($identificacion)   ){
		$mensaje.= '<li>Por favor rellena todos los tados correctamente</li>';
	}
	else{	
		try{
		$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
		}catch(PDOException $e){
			echo "Error: ". $e->getMessage();
			die();
		}

		$statement = $conexion -> prepare(
			'SELECT * FROM historiaperinatal WHERE idembara = :id LIMIT 1');
		$statement ->execute(array(':id'=>$identificacion));
		$resultado= $statement->fetch();

		if($resultado != false){
			$mensaje.= '<li>Por favor rellena todos los tados correctamente</li>';
		}
	}
	if($mensaje==''){
		$statement = $conexion->prepare(
		'INSERT INTO historiaperinatal 
		( idembara,identificacion,nombre,apellidos,numerohistoria,nacionalidad, edad, domicilio, localidad, telefono, fechanac, estudios, edocivil, peso, talla, fum, fpp,grupos, fuma, droga, alcohol, antiru, toxoide, hiv, exclini, exmama, exodon, expelv, expapan,excolon, excervix, toxoplasmosis, vdrl, vdrlf, glise, urea, hosp, trasl, traslf, traslugar, gruposp, vdrlp, vdrlpf, sifilis, obser)
	values(null, :id,:nombre,:apellidos, :numerohistoria, :nacionalidad, :edad, :domicilio, :localidad, :telefono, :fechanac, :estudios, :edocivil, :peso, :talla, :fum, :fpp, :grupos, :fuma, :droga, :alcohol, :antiru, :toxoide, :hiv, :exclini, :exmama,:exodon, :expelv, :expapan, :excolon, :excervix, :toxoplasmosis, :vdrl, :vdrlf, :glise, :urea, :hosp, :trasl, :traslf, :traslugar, :gruposp, :vdrlp, :vdrlpf, :sifilis, :obser  )');



		$statement ->execute(array(
		':id'=>$identificacion,
		':nombre'=> $nombre,
		':apellidos'=>$apellidos,
		':numerohistoria'=>$numerohistoria,
		':nacionalidad'=>$nacionalidad,
	    ':edad'=>$edad, 
		':domicilio'=>$domicilio,
		 ':localidad'=>$localidad,
		':telefono'=>$telefono,
		':fechanac'=>$fechanac,
		':estudios'=>$estudios,
		':edocivil'=>$edocivil, 
        ':peso'=>$peso,
	    ':talla'=>$talla,
		':fum'=>$fum,
		':fpp'=>$fpp,
		':grupos'=>$grupos,
		':antiru'=>$antiru,
		':toxoide'=>$toxoide,
		':fuma'=>$fuma,
		':droga'=>$droga,
		':alcohol'=>$alcohol,
		':hiv'=>$hiv,
		':exclini'=>$exclini,
		':exmama'=>$exmama,
		':exodon'=>$exodon,
		':expelv'=>$expelv,
		':expapan'=>$expapan,
		':excolon'=>$excolon,
		':excervix'=>$excervix,
		':toxoplasmosis'=>$toxoplasmosis,
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
		':sifilis'=>$sifilis,
		':obser'=>$obser ));
		
	

						

		
		echo '<script>alert("Historia Agregada Con Exito")</script> ';
		echo "<script>location.href='prenatal.php'</script>";
	}
}
require 'vista/historiapaciente_vista.php';
?>