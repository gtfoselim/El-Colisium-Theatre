<?php
include '../../controller/evenC.php';

$pc=new evenC();

$pc->deleteEvent($_GET["id"]);
header('Location:../backEnd/afficher.php');
?>