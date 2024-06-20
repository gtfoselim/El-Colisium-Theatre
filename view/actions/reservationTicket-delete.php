<?php
    include '../../Controller/reservationTicketC.php';

    if(isset($_POST['delete_reservation']))
    {
        echo $_POST['delete_reservation'];
        $reservationTicketC = new ReservationTicketC();
        $reservationTicketC->deleteReservationTicket($_POST['delete_reservation']);
        header('Location:../backEnd/tableTicket.php');
    }
?>