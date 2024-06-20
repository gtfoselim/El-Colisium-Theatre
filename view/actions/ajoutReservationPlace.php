<?php
    include "../../controller/reservationPlaceC.php";
    include "../../model/reservationPlace.php";
    
    $reservationPlaceC = new ReservationPlaceC();
    $reservationPlace = new ReservationPlace($_POST['CIN'], $_POST['Nom'], $_POST['Prenom'], $_POST['Email'], $_POST['typeEvenement'], $_POST['NomEvenement'], $_POST['DateEvenement'], $_POST['nbPersonneEstime'], $_POST['PrixTicket']);
    $reservationPlaceC -> addReservationPlace($reservationPlace);
    header('Location:../backEnd/tablePlace.php');
?>