<?php

include_once "libs/tcpdf/xtcpdf.php";
include_once "conexionBD.php";

$sql="SELECT * FROM medicos ORDER BY idMedico ";

 $result=ejecutar($sql);

// create new PDF document

$pdf = new XTCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('');
$pdf->SetTitle('Listado De Medicos');
$pdf->SetFont('dejavusans', '', 10, '', true);
$pdf->AddPage();
$pdf->SetMargins(40, 40, 40);
$pdf->Ln(60);


$pdf->SetFont('dejavusans', 'B', 14, '', true);
$pdf->Cell(0, 0, "Lista De Medicos", 0, 1, 'L');
$pdf->Ln(10);
$sql="SELECT * FROM medicos ORDER BY idMedico ";

$pdf->SetFont('dejavusans', 'B', 12, '', true);
$pdf->SetTextColor(30,89,69);
$result=ejecutar($sql);
$pdf->Ln();
//Defino los encabezados de la tabla
$pdf->Cell(10, 0, "N°", 1, 0, 'C');
$pdf->Cell(35, 0, "Identificacion", 1, 0,'C');
$pdf->Cell(50, 0, "Nombre", 1, 0,'C');
$pdf->Cell(50, 0, "Apellido", 1, 0,'C');
$pdf->Cell(35, 0, "Telefono", 1, 0,'C');
$pdf->Cell(50, 0, "Correo", 1, 0,'C');

$pdf->SetTextColor(10,10,10);
$pdf->SetFont('dejavusans', '', 12, '', true);
$i=1;
while ($fila = mysqli_fetch_assoc($result)) {
    $pdf->Ln();
    $pdf->Cell(10, 0, $i++, 1, 0, 'C');
    $pdf->Cell(35, 0, $fila['medidentificacion'], 1, 0);
    $pdf->Cell(50, 0, $fila['mednombres'], 1, 0);
    $pdf->Cell(50, 0, $fila['medapellidos'], 1, 0);
    $pdf->Cell(35, 0, $fila['medtelefono'], 1, 0);
    $pdf->Cell(50, 0, $fila['medcorreo'], 1, 0);

   }
// ---------------------------------------------------------
   


// Close and output PDF document
// This method has several options, check the source code documentation for more information.
ob_clean();
$pdf->Output('ListadoPersonal.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+
