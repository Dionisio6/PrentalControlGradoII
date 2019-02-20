<?php

include "tcpdf.php";

class XTCPDF extends TCPDF {

    //var $xheadertext = 'PDF creado using CakePHP y TCPDF';
    var $xheadercolor = array(0, 0, 200);
    //var $xfootertext = 'Copyright © %d XXXXXXXXXXX. All rights reserved.';
    var $xfooterfont = PDF_FONT_NAME_MAIN;
    var $xfooterfontsize = 10;
    var $font = 'freesans';

    function Header() {

        //list($r, $b, $g) = $this->xheadercolor;
        $this->setY(4);
        //$this->SetFillColor($r, $b, $g);
        $this->SetTextColor(0, 0, 0);
        $this->Text(15, 20, $this->xheadertext);
        $this->Image('img/logo.png', 35, 15, 25, 25);
         $this->Ln();
        $this->Cell(0, 0, 'Republica Bolivarian De Venezuela', 0, 1, 'C');
        $this->Cell(0, 0, 'Ministerio de Salud y Desarrollo Social', 0, 1, 'C');
        $this->Cell(0, 0, 'Programa de Atención Publica Ruta Materna', 0, 1, 'C');
        $this->Ln(10);
        $this->SetFontSize(10);
        $this->Cell(0, 0, 'Altagracia De Orituco Estado Guarico, ' . date("d/m/Y H:i:s"), 0, 1, 'R');
        $this->SetFontSize(12);
        $this->Ln();
    

        
    }

    

}
?>

