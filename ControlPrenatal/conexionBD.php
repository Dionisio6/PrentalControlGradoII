<?php

//conxion BD

function conectar (){

$host = "localhost";
$user = "root";
$password = "";
$database = "centromedico";
$con = new mysqli($host, $user, $password, $database);
/*comprobar la base de datos */
if ($con->connect_errno){
	printf("Fallo la Conexion: %s\n", $con->connect_error);
	exit();
}
 return $con;

}

function ejecutar($query){
   $con = conectar();
   $result = $con->query($query);
   if(!$result){
   	printf($con->error);
   }
   $con->close();
   return $result;




}