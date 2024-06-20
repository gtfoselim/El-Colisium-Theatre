<?php
    include "../../controller/ticketC.php";
    include "../../model/ticket.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exeption;

    require '../../phpmailer/src/Exception.php';
    require '../../phpmailer/src/PHPMailer.php';
    require '../../phpmailer/src/SMTP.php';

    
    $ticketC = new TicketC();
    $ticketC -> verifyTicket($_GET['idReservation']);
    $ticket = $ticketC ->getReservationTicket($_GET['idReservation']);
    //var_dump($ticket);

    $mail = new PHPMailer (true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'mehdifgaier123@gmail.com';
    $mail -> Password = 'gljreajbnoowioai';
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 465;

    $mail -> setFrom('mehdifgaier123@gmail.com', 'El collisieum');
    $mail -> addAddress($ticket['email']);

    $mail -> isHTML(true);
    $mail -> Subject = "verified Ticket";
    $mail -> Body = '
                        CIN: '.$ticket['CIN'].' ,<br>
                        your name: '.$ticket['prenom'].',<br>
                        your lastName: '.$ticket['nom'].',<br>
                        event Name: '.$ticket['nomEvenement'].',<br>
                        date: '.$ticket['dateReservation'].',<br>
                        seats: '.$ticket['seatsReserver'].'<br>

                        Thank you for the reservation. Please be on time <3
                    ';
    $mail -> send();

    header('Location:../backEnd/tableVerifiedTickets.php');

?>