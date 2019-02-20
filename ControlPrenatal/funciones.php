<?php
	function conexion($bd_config){
		try{
			$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
			return $conexion;
		}catch(PDOException $e){
			return false;
		}
	}
	function limpiarDatos($datos){
		$datos = trim($datos);
		$datos = stripslashes($datos);
		$datos = htmlspecialchars($datos);
		return $datos;
	}
	function id_numeros($id){
		return (int)limpiarDatos($id);
	}
	function obtener_medico_id($conexion,$id){
		$resultado = $conexion->query("SELECT * FROM medicos WHERE idMedico = $id LIMIT 1");
		$resultado = $resultado->fetchAll();
		return ($resultado) ? $resultado : false;
	}
    function obtenerUser_id($conexion,$id_usuario){
        $resultado = $conexion->query("SELECT * FROM usuarios WHERE id = $id_usuario LIMIT 1");
		$resultado = $resultado->fetchall();
		return ($resultado) ? $resultado : false;
        
    }
    function obtener_consultorio_id($conexion,$id_consultorio){
        $resultado = $conexion->query("SELECT * FROM consultorios WHERE idConsultorio = $id_consultorio LIMIT 1");
		$resultado = $resultado->fetchall();
		return ($resultado) ? $resultado : false;
    }
    function obtener_especialidad_id($conexion,$id_especialidad){
        $resultado = $conexion->query("SELECT * FROM especialidades WHERE idespecialidad = $id_especialidad LIMIT 1");
		$resultado = $resultado->fetchall();
		return ($resultado) ? $resultado : false;
    
    }
    function obtener_embara_id($conexion,$id_embara){
        $resultado = $conexion->query("SELECT * FROM historiaperinatal WHERE idembara = $id_embara LIMIT 1");
		$resultado = $resultado->fetchall();
		return ($resultado) ? $resultado : false;
    }
function obtener_paciente_id($conexion,$id){
		$resultado = $conexion->query("SELECT * FROM pacientes WHERE idPaciente= $id LIMIT 1");
		$resultado = $resultado->fetchAll();
		return ($resultado) ? $resultado : false;
	}
	function obtener_consulta_id($conexion,$id_consulta){
        $resultado = $conexion->query("SELECT * FROM consulta WHERE idconsul = $id_consulta LIMIT 1");
		$resultado = $resultado->fetchall();
		return ($resultado) ? $resultado : false;
    }
function iniciarSession($table, $conexion){
	$statement= $conexion->prepare("SELECT * FROM $table  WHERE usuario = :usuario");
	 $statement->execute([
    ':usuario' => $_SESSION['usuario']
  ]);
	return $statement->fetch(PDO::FETCH_ASSOC);
}

?>