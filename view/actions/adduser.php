<?php
    include "../../controller/UserC.php";
    include "../../model/User.php";
    
    /*$UserC = new UserC();
    $User = new User($_POST['username'],$_POST['firstname'], $_POST['lastname'],  $_POST['Email'], $_POST['phone'], $_POST['password']);
    $UserC -> addUser($User);*/

    


$UserC = new UserC();
if(isset($_POST['username'],$_POST['firstname'], $_POST['lastname'],  $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['photo'])){
    $User = new User($_POST['username'],$_POST['firstname'], $_POST['lastname'],  $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['photo']);
    $UserC -> addUser($User);
  header('Location:../backEnd/tables-data.php');
}
?>