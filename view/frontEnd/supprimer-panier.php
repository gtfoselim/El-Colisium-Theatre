<?php    
session_start();

$id = $_POST['id'];
$qty = $_POST['qty'];



header("location:".$_SERVER['HTTP_REFERER']);
unset( $_SESSION['panier'] [$id]);