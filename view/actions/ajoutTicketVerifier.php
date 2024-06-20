<?php
    include "../../controller/ticketC.php";
    include "../../model/ticket.php";
    
    //var_dump($_POST['seat']);
    $ticketC = new TicketC();
    //$listTicket = $ticketC->listTicket();
    $testTicket = $ticketC->rechercheSeat($_POST['seat']);
    var_dump($testTicket);
    if($testTicket == false){
        $Ticket = new Ticket($_POST['Nom'], $_POST['Prenom'], $_POST['NomEvenement'], $_POST['DateReservation'], $_POST['seat']);
        $ticketC -> addTicket($Ticket);
        header('Location:../backEnd/tableVerifiedTickets.php');
    }
    else{
        echo "<script>\n";
        echo "alert('seat Already taken. Please change seat!');";
        echo "</script>";
    }
?>