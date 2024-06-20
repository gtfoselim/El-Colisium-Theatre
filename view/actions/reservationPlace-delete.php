<?php
    include '../../Controller/reservationPlaceC.php';

    if(isset($_POST['delete_reservation']))
    {
        echo $_POST['delete_reservation'];
        $reservationPlaceC = new ReservationPlaceC();
        $reservationPlaceC->deleteReservationPlace($_POST['delete_reservation']);
        header('Location:../backEnd/tablePlace.php');
    }
?>