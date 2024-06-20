<?php
    include '../../Controller/ticketC.php';

    if(isset($_POST['delete_ticket']))
    {
        echo $_POST['delete_ticket'];
        $ticketC = new TicketC();
        $ticketC->deleteTicket($_POST['delete_ticket']);
        header('Location:../backEnd/tableVerifiedTickets.php');
    }
?>
