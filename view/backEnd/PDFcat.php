
<?php 
$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo"could not connect";
}

if(!mysqli_select_db($con,'elcollisiumtheatre'))
{
    echo"data no selected";
}





$sql = "SELECT * FROM categorie";

$records= mysqli_query($con,$sql);

require("../../lib/fpdf.php");





$pdf=new FPDF('p','mm','A4');
$pdf->AddPage();

    $pdf->SetFont('Arial','B',13);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(50,10,'liste categories:',1,0,'C');
    // Line break
    $pdf->Ln(20);

$pdf->SetFont('Arial','B',14);
$pdf->cell(20,10,"ID",1,0,'C');
$pdf->cell(40,10,"NOM",1,0,'C');
$pdf->cell(50,10,"DESCRIPTION",1,0,'C');
$pdf->cell(30,10,"DATE",1,0,'C');
$pdf->cell(50,10,"ICONE",1,1,'C');


$pdf->SetFont('Arial','',7);

while($row= mysqli_fetch_array($records))
{
    $pdf->cell(20,10,$row['id'],1,0,'C');
    $pdf->cell(40,10,$row['nom'],1,0,'C');
    $pdf->cell(50,10,$row['description'],1,0,'C');
    $pdf->cell(30,10,$row['date_creation'],1,0,'C');
    $pdf->cell(50,10,$row['icone'],1,1,'C');

}

$pdf->Output();

?>