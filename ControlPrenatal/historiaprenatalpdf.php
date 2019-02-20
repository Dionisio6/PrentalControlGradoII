<?php
include_once "libs/tcpdf/xtcpdf.php";
include_once "conexionBD.php";


  $id=$_GET['idembara'];
  $sql="SELECT identificacion,nombre,apellidos,domicilio,localidad,telefono,fechanac,estudios,edocivil,numerohistoria,nacionalidad,edad,peso,talla,fum,fpp,grupos,antiru,toxoide,fuma,droga,alcohol,hiv,exclini,exmama,exodon,expelv,expapan,excolon,excervix,toxoplasmosis,vdrl,vdrlf,glise,urea,hosp,trasl,traslf,traslugar,gruposp,vdrlp,vdrlpf,sifilis,obser FROM historiaperinatal WHERE historiaperinatal.idembara=$id";
  $result=ejecutar($sql);
  $row = $result->fetch_array(MYSQLI_ASSOC);
  $result=ejecutar($sql);


$pdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Dionisio G');
$pdf->SetTitle('Historia Perinatal del Paciente');


$pdf->SetFont('dejavusans', '', 10, '', true);
$pdf->AddPage();
$pdf->SetMargins(10, 20, 40);
$pdf->Ln(55);


$pdf->SetFont('dejavusans', 'B', 12, '', true);
$pdf->Cell(0, 0, "Historia Perinatal ", 50, 1, 'C');
$pdf->Ln(5);

  $sql="SELECT identificacion,nombre,apellidos,domicilio,localidad,telefono,fechanac,estudios,edocivil,numerohistoria,nacionalidad,edad,peso,talla,fum,fpp,grupos,antiru,toxoide,fuma,droga,alcohol,hiv,exclini,exmama,exodon,expelv,expapan,excolon,excervix,toxoplasmosis,vdrl,vdrlf,glise,urea,hosp,trasl,traslf,traslugar,gruposp,vdrlp,vdrlpf,sifilis,obser FROM historiaperinatal WHERE historiaperinatal.idembara=$id";

$pdf->SetFont('dejavusans', 'B', 10, '', true);
$result=ejecutar($sql);
$pdf->Ln();

while ($fila = mysqli_fetch_assoc($result)) {

$pdf->Cell(40, 0, "Nro de Historial:", 50, 0);
$pdf->SetFont('dejavusans', '', 10, '', true);
$pdf->Cell(20, 0, $fila['numerohistoria'], 1, 0);

$pdf->SetFont('dejavusans', 'B', 10, '', true);
$pdf->Cell(110, 0, "Lugar de Control Prenatal:", 50, 0);
$pdf->SetFont('dejavusans', '', 10, '', true);
$pdf->Cell(20, 0, "Guarico", 50, 0);



/*
$pdf->SetFont('dejavusans', 'B', 10, '', true);
$pdf->Ln();

//Defino los encabezados de la tabla


$pdf->Cell(10, 0, "N°", 1, 0, 'C');
$pdf->Cell(25, 0, "Nº de Historia", 1, 0,'C');
$pdf->Cell(25, 0, "Identificacion", 1, 0,'C');
$pdf->Cell(25, 0, "Nombres", 1, 0,'C');
$pdf->Cell(25, 0, "Apellidos", 1, 0,'C');
$pdf->Cell(25, 0, "Edad", 1, 0,'C');



$pdf->SetFont('dejavusans', '', 12, '', true);
$i=1;

    $pdf->Ln();
    $pdf->Cell(10, 0, $i++, 1, 0, 'C');
    $pdf->Cell(25, 0, $fila['numerohistoria'], 1, 0);
    $pdf->Cell(25, 0, $fila['identificacion'], 1, 0);
    $pdf->Cell(25, 0, $fila['nombre'], 1, 0);
    $pdf->Cell(25, 0, $fila['apellidos'], 1, 0);
    $pdf->Cell(25, 0, $fila['edad'], 1, 0);

*/

$pdf->Ln(10);
$pdf->SetFont('dejavusans', '', 10, '', true);

$tbl = <<<EOD
<table cellspacing="0" cellpadding="3"  border="0.5" width="120%">
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td rowspan="3">Fecha de Nacimiento:</td>
    </tr>
    <tr>
        <td colspan="2">Domicilio:</td>
    </tr>
    <tr>
       <td>Localidad</td>
       <td>Telefono</td>
       <>
    </tr>
    <tr>
       <td>Estudios:</td>
       <td>Edo Civil:</td>
       <td>Edad:</td>   
    </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->Ln(1);

$pdf->SetFont('dejavusans', 'B', 10, '', true);
$pdf->Cell(0, 0, "Gestacion Actual", 50, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('dejavusans', '', 10, '', true);

$tbl = <<<EOD
<table cellspacing="0" cellpadding="3"  border="0.5" width="120%">
    <tr>
        <td>Peso (Kg): </td>
        <td>Fecha Ultima Regla:</td>
    
    </tr>
    <tr>
        <td>Talla (cm):</td>
        <td>Fecha Posible de Parto:</td>
        
    </tr>

</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');


$pdf->Ln(1);

$pdf->SetFont('dejavusans', 'B', 10, '', true);
$pdf->Cell(0, 0, " Consumo de Sustancias Nocivas", 50, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('dejavusans', '', 10, '', true);

$tbl = <<<EOD
<table cellspacing="0" cellpadding="3"  border="0.5" width="120%">
    <tr>  
        <td>Cigarrillos: </td>     
    
       <td>Drogas:</td>
    
       <td>Alcohol:</td>
    
       <td>Otros:</td>
    </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');


$pdf->Ln(1);

$pdf->SetFont('dejavusans', 'B', 10, '', true);
$pdf->Cell(0, 0, "Vacunas Realizasdas", 50, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('dejavusans', '', 10, '', true);


$tbl = <<<EOD
<table cellspacing="0" cellpadding="3"  border="0.5" width="120%">
    <tr>  
        <td>Antirubeola: </td>     
       <td>Toxoide:</td>
       <td>Zarapion:</td>
    </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->Ln(1);

$pdf->SetFont('dejavusans', 'B', 10, '', true);
$pdf->Cell(0, 0, "Examenes Realizados", 50, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('dejavusans', '', 10, '', true);


$tbl = <<<EOD
<table cellspacing="0" cellpadding="3"  border="0.5" width="120%">
    <tr>  
        <td>Odontologico:</td>
        <td>Pelvis:</td>     
    </tr>
    <tr>
        <td>Mamas:</td>
        <td>Papanicolaou:</td>
    </tr>
    <tr>
        <td>Colonoscopia:</td>
        <td>Cervix:</td>
    </tr>
    <tr>
        <td>Toxoplasmosis:</td>
        <td>VIH:</td>

    </tr>
    <tr>
        <td>Sifilis:</td>
    </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->Ln(1);

$pdf->SetFont('dejavusans', 'B', 10, '', true);
$pdf->Cell(0, 0, "Observaciones", 50, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('dejavusans', '', 10, '', true);


$tbl = <<<EOD
<table cellspacing="0" cellpadding="3"  border="0.5" width="120%">
   
    <tr>  
        <td>
          <br>
          <br>
          <br>
        </td>
    </tr>

</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

}

    ob_clean();
$pdf->Output('historiaperinatal.pdf', 'D');


?>