<?php
	require('fpdf.php');

	$conect = mysql_connect("localhost", "root", "");
	mysql_select_db("form_pdf", $conect);

	$sql = "INSERT INTO form_value (fullname, email, contactno, comments) VALUES ('".$_POST["fullname"]."', '".$_POST["email"]."', '".$_POST["contactno"]."', '".$_POST["comments"]."');";

	mysql_query($sql);
	//exit;
	class PDF extends FPDF
	{
		// Page header
		function Header()
		{
			// Logo
			$this->Image('robi.jpg',10,6,30);
			// Arial bold 15
			$this->SetFont('Arial','B',15);
			// Move to the right
			$this->Cell(80);
			// Title
			$this->Cell(60,10,'User Information',1,0,'C');
			// Line break
			$this->Ln(20);
		}

		// Page footer
		function Footer()
		{
			// Position at 1.5 cm from bottom
			$this->SetY(-15);
			// Arial italic 8
			$this->SetFont('Arial','I',8);
			// Page number
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}

	// Instanciation of inherited class
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);

	$pdf->Cell(0,10,'Full Name : '.$_POST["fullname"],0,1);
	$pdf->Cell(0,10,'Email : '.$_POST["email"],0,1);
	$pdf->Cell(0,10,'Contact No : '.$_POST["contactno"],0,1);
	$pdf->Cell(0,10,'Comments : '.$_POST["comments"],0,1);

	$pdf->Output();
?>