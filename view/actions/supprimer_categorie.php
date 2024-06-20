<?php
  require_once '../../config.php';
 $id = $_GET['id'];
 $pdo = config::getConnexion();
    $sqlState = $pdo->prepare('DELETE FROM categorie WHERE id=?');
    $supprime = $sqlState->execute([$id]);
    header('location:../backEnd/tables-cat.php');

?>