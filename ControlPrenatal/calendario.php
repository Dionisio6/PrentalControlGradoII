<?php
require_once "bdd.php";
										

$sql = "SELECT id, title, start, end, color FROM events ";
										
$req = $bdd->prepare($sql);
$req->execute();
										
$events = $req->fetchAll();
										?>
										
<!DOCTYPE html>
<html lang="es">
										
<head>

<link rel="icon" type="image/x-icon" href="img/prenatal.png">
<header>
<div class="cabe">
<a href="CenterMedicine.php" title="Inicio">Inicio<a class="ini" href="CenterMedicine.php" title="Regesar"></a>
 
		</div>
	</header>
		
<script src="js/es.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Citas</title>
										
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='css/fullcalendar.css' rel='stylesheet' />
									
									
<style>

body{
	background: url("img/7.jpg") no-repeat ;
	

}
#calendar {
max-width: 800px;
}
.col-centered{
float: none;
margin: 0 auto;

}
.cabe{
	padding: 0% 2%;
	width:100%;
	margin:auto;
	overflow: hidden;

}header a:hover{
	color: #00f800;
	text-decoration: none;
}
header a, .usuario{
	color: #fff;
    display:inline-block;
     padding: 5px;
    font-size: 20px;
}
.usuario{
    float: right;
   


}


header {
background:  linear-gradient(178deg, green 0%, #0F3301 100%);
	width: 100%;
	height: 65px;
	font-size: 2.5em;
    
}
</style>
										
										
</head>
<body>
										
										
<div class="container">
										
<div class="row">
<div class="col-lg-12 text-center">
	 
<h1>Agregar una cita</h1>
									
<div id="calendar" class="col-centered">
</div>
</div>
										
</div>
										<!-- /.row -->
										
										<!-- Modal -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form class="form-horizontal" method="POST" action="addEvent.php">
										
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Agregar cita</h4>
</div>
<div class="modal-body">
										
<div class="form-group">
<label for="title" class="col-sm-4 control-label">Nombre De la Prenatal</label>
<div class="col-sm-8">
<input type="text" name="title" class="form-control" id="title" placeholder="Nombre">
</div>
</div>
<div class="form-group">
<label for="color" class="col-sm-4 control-label">Nº de Visita</label>
<div class="col-sm-8">
<select name="color" class="form-control" id="color">
<option value="">Seleccionar</option>
<option style="color:#2B0AD3;" value="#2B0AD3">&#9724; Primera visita</option>
<option style="color:#40E0D0;" value="#40E0D0">&#9724; Segunda visita</option>
<option style="color:#12FC0C;" value="#12FC0C">&#9724; Tercera visita</option>						  
<option style="color:#FFD700;" value="#FFD700">&#9724; Cuarta visita</option>
<option style="color:#FF8C00;" value="#FF8C00">&#9724; Quinta visita</option>
<option style ="color:#860EF5;" value="#860EF5">&#9724; Sexta visita</option>
<option style="color:#FCDD0E;" value="#FCDD0E">&#9724; Septima visita</option>
<option style="color:#F7CAEC;" value="#F7CAEC">&#9724; Octava visita</option>
<option style="color:#F0610B;" value="#F0610B">&#9724; Novena visita</option>
</select>
</div>
</div>
<div class="form-group">
<label for="start" class="col-sm-2 control-label">Fecha inicial</label>
<div class="col-sm-10">
<input type="text" name="start" class="form-control" id="start" readonly>
</div>
</div>
<div class="form-group">
<label for="end" class="col-sm-2 control-label">Fecha final</label>
<div class="col-sm-10">
<input type="text" name="end" class="form-control" id="end" readonly>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
</div>
</div>
										
										
										
										<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<form class="form-horizontal" method="POST" action="editEventTitle.php">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modificar cita</h4>
</div>
<div class="modal-body">
										
<div class="form-group">
<label for="title" class="col-sm-2 control-label">Nombre</label>
<div class="col-sm-10">
<input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
</div>
</div>
<div class="form-group">
<label for="color" class="col-sm-2 control-label">Color</label>
<div class="col-sm-10">
	<select name="color" class="form-control" id="color">
<option value="">Seleccionar</option>
<option style="color:#2B0AD3;" value="#2B0AD3">&#9724; Primera visita</option>
<option style="color:#40E0D0;" value="#40E0D0">&#9724; Segunda visita</option>
<option style="color:#12FC0C;" value="#12FC0C">&#9724; Tercera visita</option>						  
<option style="color:#FFD700;" value="#FFD700">&#9724; Cuarta visita</option>
<option style="color:#FF8C00;" value="#FF8C00">&#9724; Quinta visita</option>
<option style ="color:#860EF5;" value="#860EF5">&#9724; Sexta visita</option>
<option style="color:#FCDD0E;" value="#FCDD0E">&#9724; Septima visita</option>
<option style="color:#F7CAEC;" value="#F7CAEC">&#9724; Octava visita</option>
<option style="color:#F0610B;" value="#F0610B">&#9724; Novena visita</option>
</select>
</div>
</div>
<div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10">
<div class="checkbox">
<label class="text-danger"><input type="checkbox"  name="delete"> Eliminar Cita</label>
</div>
</div>
</div>
										
<input type="hidden" name="id" class="form-control" id="id">
										
										
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
</div>
</div>
										
</div>
	
	<br>
	<br>
	<br>									
<script src="js/jquery.js"></script>				
<script src="js/bootstrap.min.js"></script>		
<script src='js/moment.min.js'></script>
<script src='js/fullcalendar/fullcalendar.min.js'></script>
<script src='js/fullcalendar/fullcalendar.js'></script>
<script src='js/fullcalendar/locale/es.js'></script>
										

<script>
										
$(document).ready(function() {
										
var date = new Date();

var yyyy = date.getFullYear().toString();

var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();

var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();
										
$('#calendar').fullCalendar({
header: {language: 'es',
left: 'prev,next today',
center: 'title',
right: 'month,basicWeek,basicDay',
									},
							
defaultDate: yyyy+"-"+mm+"-"+dd,
editable: true,
eventLimit: true, // allow "more" link when too many events
selectable: true,
selectHelper: true,
	select: function(start, end) {
										
$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));

$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
					
$('#ModalAdd').modal('show');
										},
eventRender: function(event, element) {element.bind('dblclick', function() {
										
$('#ModalEdit #id').val(event.id);
		
$('#ModalEdit #title').val(event.title);
					
$('#ModalEdit #color').val(event.color);
							
$('#ModalEdit').modal('show');});
										},
										
eventDrop: function(event, delta, revertFunc) { // si changement de position
										
edit(event);
										
										},
eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
										
edit(event);
										
										},
events: [
<?php foreach($events as $event): 
										
$start = explode(" ", $event['start']);

$end = explode(" ", $event['end']);
if($start[1] == '00:00:00'){
$start = $start[0];
						
						}else{
$start = $event['start'];
										}
if($end[1] == '00:00:00'){
										
$end = $end[0];
}else{
$end = $event['end'];
										}
										?>
										{
id: '<?php echo $event['id']; ?>',
title: '<?php echo $event['title']; ?>',
start: '<?php echo $start; ?>',
end: '<?php echo $end; ?>',
color: '<?php echo $event['color']; ?>',
										},
<?php endforeach; ?>
										]
										});
										
function edit(event)
{start = event.start.format('YYYY-MM-DD HH:mm:ss');
if(event.end){
end = event.end.format('YYYY-MM-DD HH:mm:ss');
										}else{
end = start;
										}
										
id =  event.id;
										
Event = [];
Event[0] = id;
Event[1] = start;
Event[2] = end;
										
$.ajax({url: 'editEventDate.php',type: "POST",data: {Event:Event},
							
success: function(rep) 
{if(rep == 'OK'){
	alert('Cita se ha guardado correctamente');
										
}else{
	alert('No se pudo guardar. Inténtalo de nuevo.'); 
										}
										}
										});
										}
										
										});
										
</script>
</body>
					
</html>
