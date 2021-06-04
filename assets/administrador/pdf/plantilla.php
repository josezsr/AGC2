<?php
 ini_set("default_charset", "UTF-8");
 mb_internal_encoding("UTF-8");
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
	require 'fpdf182/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../../../img/logo1.jpg',10,8,33);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(80,10, 'Relacion de material existente',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
	
?> 