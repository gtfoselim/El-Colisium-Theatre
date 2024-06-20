<?php
   /* include '../Controller/UserC.php';

    if(isset($_POST['delete_user']))
    {
        echo $_POST['delete_reservation'];
        $UserC = new UserC();
        $UserC->deleteUser($_POST['delete_user']);
        header('Location:tables-data.php');
    }*/

include '../../controller/UserC.php';

$UserC=new UserC();

$UserC->deleteUser($_GET["id"]);
header('Location:../backEnd/tables-data.php');
?>