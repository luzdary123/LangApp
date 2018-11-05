<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	// Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'PROFESORES',0,1,'C');
	$this->Ln(10);
	// Ensure table header is printed
	parent::Header();
}
}

// Connect to database
$link = mysqli_connect('localhost','root','','langapp');

$pdf = new PDF( 'L', 'mm', 'A4' );
//$pdf = new PDF();
$pdf->AddPage();
$ssql = "select t.Identification, t.Name, T.LastName,T.Address,T.phone
from teachers t";
// First table: output all columns
$pdf->Table($link, $ssql);
//$pdf->AddPage();
// Second table: specify 3 columns
/*$pdf->AddCol('rank',20,'','C');
$pdf->AddCol('name',40,'Country');
$pdf->AddCol('pop',40,'Pop (2001)','R');
$prop = array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);*/
//$pdf->Table($link,'select name, format(pop,0) as pop, rank from country order by rank limit 0,10',$prop);
$pdf->Output();
?>
