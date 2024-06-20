<?php
  require_once '../../config.php';
 $id = $_GET['id'];
 $pdo = config::getConnexion();
    $sqlState = $pdo->prepare('DELETE FROM produit WHERE id=?');
    $supprime = $sqlState->execute([$id]);
    header('location:../backEnd/tables-prod.php');

?>