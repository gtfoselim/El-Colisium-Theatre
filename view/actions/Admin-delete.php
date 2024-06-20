<?php
   /* include '../Controller/UserC.php';

    if(isset($_POST['delete_user']))
    {
        echo $_POST['delete_reservation'];
        $UserC = new UserC();
        $UserC->deleteUser($_POST['delete_user']);
        header('Location:tables-data.php');
    }*/

include '../../controller/AdminC.php';

$AdminC=new AdminC();

$AdminC->deleteAdmin($_GET["id_admin"]);
header('Location:../backEnd/tables_admin.php');
?>