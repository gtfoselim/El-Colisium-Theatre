<?php 
include "../../controller/evenC.php";

$even = null;
$evenC = new evenC();
$list = $evenC->afficher();

require("C:/XAMPP/htdocs/projectSemestre2/lib/fpdf.php");





$pdf=new FPDF('p','mm','A4');
$pdf->AddPage();

    $pdf->SetFont('Arial','B',11);
    // Move to the right
    $pdf->Cell(70);
    // Title
    $pdf->Cell(50,10,'Liste dEvenements',1,0,'C');
    // Line break
    $pdf->Ln(15);

$pdf->SetFont('Arial','B',10);
$pdf->cell(10,10,"ID",1,0,'C');
$pdf->cell(20,10,"Nom",1,0,'C');
$pdf->cell(20,10,"Categorie",1,0,'C');
$pdf->cell(40,10,"Date d'even",1,0,'C');
$pdf->cell(40,10,"Time d'even",1,0,'C');
$pdf->cell(20,10,"Actors",1,0,'C');
$pdf->cell(20,10,"Price",1,0,'C');
$pdf->cell(20,10,"Tickets",1,1,'C');

$pdf->SetFont('Arial','',6);

foreach($list as $ticket){
    $pdf->cell(10,10,$ticket['id'],1,0,'C');
    $pdf->cell(20,10,$ticket['nom'],1,0,'C');
    $pdf->cell(20,10,$ticket['categorie'],1,0,'C');
    $pdf->cell(40,10,$ticket['doe'],1,0,'C');
    $pdf->cell(40,10,$ticket['toe'],1,0,'C');
    $pdf->cell(20,10,$ticket['actors'],1,0,'C');
    $pdf->cell(20,10,$ticket['price'],1,0,'C');
    $pdf->cell(20,10,$ticket['tickets'],1,1,'C');

}

$pdf->Output();

?>