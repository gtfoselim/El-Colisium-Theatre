<?php
    require_once '../../controller\SolutionC.php';

    $SolutionC= new SolutionC();
    $SolutionC->supprimerSolution($_GET['ID_S']);
    header('Location:../backEnd/afficherSolution.php');
?>