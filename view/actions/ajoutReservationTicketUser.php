<?php
    include "../../controller/reservationTicketC.php";
    include "../../model/reservationTicket.php";
    
    $reservationTicketC = new ReservationTicketC();
    $reservationTicket = new ReservationTicket($_POST['CIN'], $_POST['Nom'], $_POST['Prenom'], $_POST['Email'], $_POST['NomEvenement'], $_POST['DateReservation'], $_POST['seatsReserver']);
    $reservationTicketC -> addReservationTicket($reservationTicket);
    header('Location:../frontEnd/reservationConfirmation.php');
?>