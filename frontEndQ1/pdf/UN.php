<?php
require('/fpdf.php');

$name= $_POST['name'];
$departement= $_POST['departement']; 
$missionDate= $_POST['missionDate'];
$project= $_POST['project'];
$introduction= $_POST['introduction'];
$missionContext= $_POST['missionContext'];
$questions= $_POST['questions'];
$conclusion= $_POST['conclusion'];
$recommendations= $_POST['recommendations'];
$date = date("d-m-Y");

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(1,10,'Executive Board of the  '.$departement);
$pdf->Cell(50,20,'Date '.$date);
$pdf->Cell(5,40,'Project '.$project);
$pdf->Cell(-55,50,'MissionDate  '.$missionDate);

$pdf->Cell(0.1,90,'Introdiction:  '.$introduction);
$pdf->Cell(0.1,130,'Context: '.$missionContext);
$pdf->Cell(0.1,170,'Question:  '.$questions);

$pdf->Cell(0.1,210,'Conclusion:  '.$conclusion);
$pdf->Cell(150,250,'Recommandation: '.$recommendations);

$pdf->Cell(0,266,'Signed by:  '.$name);


// $pdf->Cell(50,10,$departement );

$pdf->Output();

?>

