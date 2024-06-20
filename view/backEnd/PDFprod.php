
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





$sql = "SELECT * FROM produit";

$records= mysqli_query($con,$sql);

require("../../lib/fpdf.php");





$pdf=new FPDF('p','mm','A4');
$pdf->AddPage();

    $pdf->SetFont('Arial','B',13);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(50,10,'liste produits:',1,0,'C');
    // Line break
    $pdf->Ln(20);

$pdf->SetFont('Arial','B',10);
$pdf->cell(10,10,"ID",1,0,'C');
$pdf->cell(20,10,"NOM",1,0,'C');
$pdf->cell(30,10,"PRIX",1,0,'C');
$pdf->cell(30,10,"DISCOUNT",1,0,'C');
$pdf->cell(30,10,"categorie",1,0,'C');
$pdf->cell(15,10,"DATE",1,0,'C');
$pdf->cell(30,10,"description",1,0,'C');
$pdf->cell(40,10,"image",1,1,'C');


$pdf->SetFont('Arial','',3);

while($row= mysqli_fetch_array($records))
{
    $pdf->cell(10,10,$row['id'],1,0,'C');
    $pdf->cell(20,10,$row['nom'],1,0,'C');
    $pdf->cell(30,10,$row['prix'],1,0,'C');
    $pdf->cell(30,10,$row['discount'],1,0,'C');
    $pdf->cell(30,10,$row['id_categorie'],1,0,'C');
    $pdf->cell(15,10,$row['date_creation'],1,0,'C');
    $pdf->cell(30,10,$row['description'],1,0,'C');
    $pdf->cell(40,10,$row['image'],1,1,'C');

}

$pdf->Output();

?>