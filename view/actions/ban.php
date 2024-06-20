<?php
session_start();

if(isset($_SESSION["id"])) {
}else{
  session_destroy();
	header('Location: ../frontEnd/signin.php');

    
}
?>

<?php
	include '../../Controller/UserC.php';
	$userC=new UserC();

if (isset($_GET["id"])){
 if ($_GET["active"]==1 )
 {
    $userC->banuser($_GET["id"]);
    header('Location:../backEnd/tables-data.php');

 }
 else
 {
    $userC->unbanuser($_GET["id"]);
    header('Location: ../backEnd/tables-data.php');

 }
	
}

?>