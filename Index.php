<?php

 include 'plantilla.php' ;
 require 'conexion.php' ;

 $query = "SELECT NConfirmacion,Pelicula,Sala,Fecha,Hora,Transacción,Boletos,Total FROM datos_orden";
 $resultado = $mysqli->query($query);
 
 $pdf = new PDF();
 $pdf->AliasNbPages();
 $pdf->AddPage();
 
 $pdf->SetFillColor(232,232,232);
 $pdf->SetFont('Arial','B',12);
//  $pdf->Cell(70,6,'Numero de Confirmacion:',1,0,'C',1);
//  $pdf->Cell(20,6,'Pelicula',1,0,'C',1);
//  $pdf->Cell(70,6,'Sala',1,1,'C',1);
 
 $pdf->SetFont('Arial','',10);

 while($row = $resultado->fetch_assoc())
 {
    
     $pdf->Cell(188,6,utf8_decode('Numero de Confirmación:'),1,1,'C',1);
     $pdf->Cell(188,6,$row['NConfirmacion'],1,1,'C');
     $pdf->Cell(188,6,'Pelicula:',1,1,'C',1);
     $pdf->Cell(188,6,$row['Pelicula'],1,1,'C');
     $pdf->Cell(62.66,6,'Sala:',1,0,'C',1);
     $pdf->Cell(62.66,6,'Fecha:',1,0,'C',1);
     $pdf->Cell(62.66,6,'Hora:',1,1,'C',1);
     $pdf->Cell(62.66,6,$row['Sala'],1,0,'C');
     $pdf->Cell(62.66,6,$row['Fecha'],1,0,'C');
     $pdf->Cell(62.66,6,$row['Hora'],1,1,'C');
     $pdf->Cell(188,6,utf8_decode('Transacción:'),1,1,'C',1);
     $pdf->Cell(188,6,$row['Transacción'],1,1,'C');
     $pdf->Cell(188,6,'Boletos:',1,1,'C',1);
     $pdf->Cell(188,6,$row['Boletos'],1,0,'C');
     $pdf->Ln(20);
     $pdf->SetFont('Arial','B',12);
     $pdf->Cell(45,6,'Total de la Compar:',0,0,'l');
     $pdf->Cell(1,6,'L.',0,0,'C');
     $pdf->Cell(30,6,$row['Total'],0,0,'l');
     
 }

 //$pdf->Output();
 $pdf->Output('D','Orden De Compra.pdf');
 

?>