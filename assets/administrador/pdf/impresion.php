<?php
	include 'plantilla.php';
	require '../../../require/conexion.php';

	

    $query = "Select mt.idmaterial, mt.nombre, mt.descripcion, t.size, m.nombre, i.URL, s.nombre, mt.cantidad FROM
	material AS mt inner join size AS t On mt.idsize=t.idsize 
	inner join marca as m on mt.idmarca=m.idmarca 
	inner join imagen as i on mt.idimagen=i.idimagen
	inner join site as s on mt.idsite=s.idsite";

	$resultado = $conexion->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages(); 
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(11,6,'#',1,0,'C',1);
	$pdf->Cell(20,6,'mombre',1,0,'C',1);
	$pdf->Cell(30,6,'descripcion',1,0,'C',1);
    $pdf->Cell(25,6,'tamaño',1,0,'C',1);
	$pdf->Cell(20,6,'marca',1,0,'C',1);
	$pdf->Cell(30,6,'imagen',1,0,'C',1);
    $pdf->Cell(20,6,'site',1,0,'C',1);
	$pdf->Cell(20,6,'cantidad',1,0,'C',1);

	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,$row['idmaterial'],1,0,'C',0);
		$pdf->Cell(70,6,utf8_decode($row['nombre']),1,0,'C',0);
        $pdf->Cell(20,6,($row['descripcion']),1,0,'C',0);
        $pdf->Cell(20,6,($row['size']),1,0,'C',0);
        $pdf->Cell(20,6,($row['nombre']),1,0,'C',0);
        $pdf->Cell(20,6,($row['URL']),1,0,'C',0);
        $pdf->Cell(20,6,($row['nombre']),1,0,'C',0);
        $pdf->Cell(20,6,($row['cantidad']),1,1,'C',0);
	}
	$pdf->Output();
?>