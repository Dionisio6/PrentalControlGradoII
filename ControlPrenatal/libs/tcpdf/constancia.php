<?php

App::import('Vendor', 'tcpdf/tcpdf');

class XTCPDF extends TCPDF {

    var $xheadertext = 'PDF creado using CakePHP y TCPDF';
    var $xheadercolor = array(0, 0, 200);
    //var $xfootertext = 'Copyright © %d XXXXXXXXXXX. All rights reserved.';
    var $xfooterfont = PDF_FONT_NAME_MAIN;
    var $xfooterfontsize = 8;
    var $font = 'dejavusans';

    function Header() {

        list($r, $b, $g) = $this->xheadercolor;
        $this->SetMargins(30,0);;
        $this->setY(4);
        $this->SetFillColor($r, $b, $g);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0, 20, '', 0, 1, 'C', 1);
        //$this->Text(15, 26, $this->xheadertext);
        $this->SetFont($this->font, 'B', 10);
        $this->Image(WWW_ROOT . 'img/logo.jpg', 80, 30, 55, 25);
        //$this->Ln(10);
        $this->Ln(30);
        $this->Cell(0, 0, 'UNIVERSIDAD NACIONAL EXPERIMENTAL ROMULO GALLEGOS', 0, 1, 'C');
        $this->Cell(0, 0, 'DIRECCION DE RECURSOS HUMANOS', 0, 1, 'C');
        $this->Cell(0, 0, 'DEPARTAMENTO DE SOCIO LEGAL', 0, 1, 'C');
        $this->Ln(10);
        $this->SetFontSize(8);
        $this->Cell(0, 0, 'San Juan de Los Morros, ' . date("d/m/Y H:i:s"), 0, 1, 'R');
        $this->SetFontSize(10);
        $this->Ln(3);
        $this->Cell(0, 0, '40.01.DRH.'.date('Y').'.-', 0, 1, 'L');
        $this->SetFontSize(14);
        $this->Ln(4);
        $this->Cell(0, 0, 'C   O   N   S   T   A   N   C   I   A', 0, 0, 'C');
        $this->Ln(3);
    }

    function Footer() {
        $this->SetFontSize(8);
        $this->SetMargins(30,0);
        $this->SetY(-23);
        $this->Cell(0, 4, "Universidad Nacional Experimental Rómulo Gallegos, RIF.: G-20003225-1", 'T', 1, 'C', 0);
        $this->Cell(0, 4, "Ciudad universitaria, via El Castrero - San Juan de los Morros - Estado Guárico - Venezuela", 0, 1, 'C', 0);
        $this->Cell(0, 4, "Telfs: (0246) 431.05.84 - 431.08.31 - 431.27.23 . Fax: (0246) 431.26.70 Ext. 157 - 158", 0, 1, 'C', 0);
    }

    function CodVal() {
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; //posibles caracteres a usar
        $numerodeletras = 10; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        for ($i = 0; $i < $numerodeletras; $i++) {
            $cadena .= substr($caracteres, rand(0, strlen($caracteres)), 1); /* Extraemos 1 caracter de los caracteres
              entre el rango 0 a Numero de letras que tiene la cadena */
        }
        return $cadena;
    }

}
?>

