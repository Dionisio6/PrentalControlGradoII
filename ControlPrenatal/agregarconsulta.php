
<?php session_start();
if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$nombre = filter_var(strtolower($_POST['nombre']),FILTER_SANITIZE_STRING);
	$apellidos = $_POST['apellidos'];
    $identificacion = $_POST['identificacion'];
    $edad = $_POST['edad'];
    $fechacon = $_POST['fechacon'];
    $peso = $_POST['peso'];
    $tenar = $_POST['tenar'];
    $alut = $_POST['alut'];
    $presen = $_POST['presen'];
    $fcf = $_POST['fcf'];
	$movf = $_POST['movf'];
	$ede = $_POST['ede'];
	$vari = $_POST['vari'];
    $medicos =  $_POST['medicos'];
	$obser = $_POST['obser'];
	$errores ='';
	
	if(empty($nombre) or empty($apellidos) or empty($identificacion)  ){
		$errores.= '<li>Por favor rellena todos los tados correctamente</li>';
	}
	else{	
		try{
			$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
		}catch(PDOException $e){
			echo "Error: ". $e->getMessage();
			die();
		}

		$statement = $conexion -> prepare(
			'SELECT * FROM consulta WHERE idconsul = :id LIMIT 1');
		$statement ->execute(array(':id'=>$identificacion));
		$resultado= $statement->fetch();

		if($resultado != false){
			$errores.='Ya existe un paciente con esa identificación </br>';
		}
	}
	if($errores==''){
		$statement = $conexion->prepare(
		'INSERT INTO consulta(idconsul,identificacion, nombre,apellidos,edad,fechacon,peso,tenar,alut,presen,fcf, movf,ede,vari, medicos,obser)
		values(null, :id,:nombre,:apellidos,:edad,:fechacon,:peso,:tenar,:alut,:presen,:fcf,:movf,:ede,:vari,:medicos,:obser)');

		$statement ->execute(array(
		':id'=>$identificacion,
		':nombre'=> $nombre,
		':apellidos'=>$apellidos,
		':edad'=>$edad,
		':fechacon'=>$fechacon,
		':peso'=>$peso,
		':tenar'=>$tenar,
		':alut'=>$alut,
		':presen'=>$presen,
		':fcf'=>$fcf,
		':movf'=>$movf,
		':ede'=>$ede,
		':vari'=>$vari,
		':medicos'=>$medicos,
		':obser'=>$obser

	    
		
	

						

		));
		echo '<script>alert("Consulta Agregada Con exito")</script> ';
		echo "<script>location.href='consultapre.php'</script>";
		
	}
}
require 'vista/agg_consulta_vista.php';
?>
