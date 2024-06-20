<?php 
include "../../controller/ticketC.php";

$list = null;
$ticketC = new TicketC();
$list = $ticketC->listTicket();

require("C:/XAMPP/htdocs/projectSemestre2/lib/fpdf.php");





$pdf=new FPDF('p','mm','A4');
$pdf->AddPage();

    $pdf->SetFont('Arial','B',11);
    // Move to the right
    $pdf->Cell(70);
    // Title
    $pdf->Cell(50,10,'Profile List:',1,0,'C');
    // Line break
    $pdf->Ln(15);

$pdf->SetFont('Arial','B',10);
$pdf->cell(10,10,"ID",1,0,'C');
$pdf->cell(30,10,"Name",1,0,'C');
$pdf->cell(30,10,"LastName",1,0,'C');
$pdf->cell(40,10,"Evenement",1,0,'C');
$pdf->cell(40,10,"Date Evenement",1,0,'C');
$pdf->cell(10,10,"Seat",1,1,'C');

$pdf->SetFont('Arial','',6);

foreach($list as $ticket){
    $pdf->cell(10,10,$ticket['id'],1,0,'C');
    $pdf->cell(30,10,$ticket['nom'],1,0,'C');
    $pdf->cell(30,10,$ticket['prenom'],1,0,'C');
    $pdf->cell(40,10,$ticket['nomEvenement'],1,0,'C');
    $pdf->cell(40,10,$ticket['dateEvenement'],1,0,'C');
    $pdf->cell(10,10,$ticket['seat'],1,1,'C');

}

$pdf->Output();

?>