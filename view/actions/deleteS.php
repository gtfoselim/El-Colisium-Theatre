<?php
include '../../controller/evenC.php';

$pc=new sponsorC();

$pc->deleteSponsor($_GET["id"]);
header('Location:../backEnd/afficherS.php');
?>