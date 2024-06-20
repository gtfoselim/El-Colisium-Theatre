<?php
    require_once '../../controller/ReclamationC.php';

    $ReclamationC = new ReclamationC();
    $ReclamationC->supprimerReclamation($_GET['ID_RECLAMATION']);
    header('Location:../backEnd/afficherReclamation.php');
?>