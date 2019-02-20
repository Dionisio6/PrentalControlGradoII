<?php
$mensaje='';
try{
	$conexion = new PDO('mysql:host=localhost;dbname=centromedico','root','');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}

$consulta = $conexion -> prepare("
	SELECT * FROM consulta ORDER BY identificacion");

$consulta ->execute();
$consulta = $consulta ->fetchAll();
if(!$consulta){
	$mensaje .= 'NO HAY PRENATALES PARA MOSTRAR';
}
?>
<?php include 'plantillas/header.php'; ?>
	<section class="main">
		<div class="wrapp">
			<?php include 'plantillas/nav.php'; ?>
				<article>
					<div class="mensaje">
						<h2>PRENATAL</h2>
					</div>
						<a href="consulta_vista.php" class="agregar">Agregar Prenatal</a>
						
						<table class="tabla">
						  <tr>
						  	<th>Nº</th>
			
							<th>Identificacion</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							
							<th colspan ="2">Opciones</th>

						  </tr>
						<?php foreach ($consulta as $Sql): ?>
						<tr >
							<?php echo "<td>". $Sql['idconsul']. "</td>"; ?>
							<?php echo "<td class='mayusculas'>". $Sql['numerohistoria']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['identificacion']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['nombre']. "</td>"; ?>
						<?php echo "<td class='mayusculas'>". $Sql['apellidos']. "</td>"; ?>
					

						
						</tr>
						<?php endforeach; ?>
						</table>
						<?php  if(!empty($mensaje)): ?>
							<ul>
							  <?php echo $mensaje; ?>
							</ul>
						<?php  endif; ?>
				</article>
	</section>
<?php include 'plantillas/footer.php'; ?>
</body>
</html>