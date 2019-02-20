<?php
	$errores='';
	extract ($_REQUEST);
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
	}catch(PDOException $e){
		echo "Error: ". $e->getMessage();
	}
	$sql="DELETE FROM consulta WHERE idconsul = '$_REQUEST[idconsul]'";
	$resultado = $conexion->query($sql);

	if($resultado == true){
		echo '<script>alert("Consulta Eliminada Correctamente")</script> ';
		echo "<script>location.href='consultapre.php'</script>";
	}
?>