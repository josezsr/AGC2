<?php
require('fpdf182/fpdf.php');
class PDF extends FPDF
{
function Header()
{
    // Logo
    $this->Image('../../../img/logo1.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(80,10,'site',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final 
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require '../../php/conexion.php';
$q = "Select * from site";
$resultado = $conexion->query($q);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage(); 
$pdf->SetFont('Times','',12);
    while($row = $resultado -> fetch_assoc()){
        $pdf->cell(10, 20, $row['idsite'],1,0,'C', 0); 
        $pdf->cell(40, 20, $row['nombre'],1,0,'C', 0); 
        $pdf->cell(120, 20, $row['ubicacion'],1,1,'C', 0); 

    }

$pdf->Output();
?>