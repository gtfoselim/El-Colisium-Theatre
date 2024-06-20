<?php
 
$dataPoints = array( 
	array("y" => 3373.64, "label" => "Germany" ),
	array("y" => 2435.94, "label" => "France" ),
	array("y" => 1842.55, "label" => "China" ),
	array("y" => 1828.55, "label" => "Russia" ),
	array("y" => 1039.99, "label" => "Switzerland" ),
	array("y" => 765.215, "label" => "Japan" ),
	array("y" => 612.453, "label" => "Netherlands" )
);
 

$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"elcollisiumtheatre");

$test=array();
$count=0;

$res=mysqli_query($link,"SELECT * FROM produit");
while($row=mysqli_fetch_array($res))
{
$test[$count]["label"]=$row["nom"];
$test[$count]["y"]=$row["id_categorie"];
$count =$count+1;
}
?>


<!DOCTYPE HTML>
<html>
<head>

<section class="section">
      <div class="row">
      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Statistiques"
	},
	axisY: {
		title: "categorie"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## categorie",
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</div>
          </div>
        </div>
        </div>
    </section>

<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
</body>
</html>                 