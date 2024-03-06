<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('img/icono.jpg', 10, 5, 25 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Orden de Compra',0,0,'C');
			$this->Ln(20);
			$this->Cell(120,10, 'Estimado Cliente',0,0,'L');
			$this->Ln(10);
			$this->SetFont('Arial','',10);
			$this->Cell(95,6, utf8_decode('Gracias por usar el servicio de Cinetiket de Cine-UNICAH,Los datos de su compra estan indicados a continuación.'),0,1,'L');
			//$this->Cell(120,6, utf8_decode('Los datos de su compra estan indicados a continuación."'),0,0,'L');
			$this->Ln(10);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>