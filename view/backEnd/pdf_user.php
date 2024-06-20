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





$sql = "SELECT * FROM users";

$records= mysqli_query($con,$sql);

require("../../lib/fpdf.php");





$pdf=new FPDF('p','mm','A4');
$pdf->AddPage();

    $pdf->SetFont('Arial','B',11);
    // Move to the right
    $pdf->Cell(70);
    // Title
    $pdf->Cell(50,10,'Users List:',1,0,'C');
    // Line break
    $pdf->Ln(15);

$pdf->SetFont('Arial','B',10);
$pdf->cell(10,10,"ID",1,0,'C');
$pdf->cell(30,10,"UserName",1,0,'C');
$pdf->cell(30,10,"FirstName",1,0,'C');
$pdf->cell(30,10,"LastName",1,0,'C');
$pdf->cell(40,10,"Email",1,0,'C');
$pdf->cell(25,10,"Role",1,0,'C');
$pdf->cell(30,10,"Phone",1,1,'C');



$pdf->SetFont('Arial','',6);

while($row= mysqli_fetch_array($records))
{
    $pdf->cell(10,10,$row['id'],1,0,'C');
    $pdf->cell(30,10,$row['username'],1,0,'C');
    $pdf->cell(30,10,$row['firstname'],1,0,'C');
    $pdf->cell(30,10,$row['lastname'],1,0,'C');
    $pdf->cell(40,10,$row['email'],1,0,'C');
    $pdf->cell(25,10,$row['role'],1,0,'C');
    $pdf->cell(30,10,$row['phone'],1,1,'C');
   

}

$pdf->Output();

?>