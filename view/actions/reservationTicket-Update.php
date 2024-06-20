<?php
    include '../../Controller/reservationTicketC.php';
    include '../../Model/reservationTicket.php';

    $reservationTicketC = new ReservationTicketC();
    if(isset($_POST['update_reservationTicket'])){
        $reservationTicket = new ReservationTicket($_POST['CIN'], $_POST['Nom'], $_POST['Prenom'], $_POST['Email'], $_POST['NomEvenement'], $_POST['DateReservation'], $_POST['seatsReserver']);
        $reservationTicketC->updateReseravtionTicket($_GET['idReservation'],$reservationTicket);
        header('Location:../backEnd/tableTicket.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Reservation Update</title>
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Reservation Ticket Update 
                            <a href="../backEnd/tableTicket.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['idReservation']))
                        {
                            $r=$reservationTicketC->getReservationTicket($_GET['idReservation']);
                                ?>
                                <form method="POST">
                                <div class="mb-3">
                                    <label>CIN</label>
                                    <input type="text" name="CIN" class="form-control" value="<?=$r['CIN']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Nom</label>
                                    <input type="text" name="Nom" class="form-control" value="<?=$r['nom']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Prenom</label>
                                    <input type="text" name="Prenom" class="form-control" value="<?=$r['prenom']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="Email" class="form-control" value="<?=$r['email']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Nom de L'evenement</label>
                                    <input type="text" name="NomEvenement" class="form-control" value="<?=$r['nomEvenement']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Date de Reservation</label>
                                    <input type="date" name="DateReservation" class="form-control" value="<?=$r['dateReservation']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Seats Reserver</label>
                                    <input type="text" name="seatsReserver" class="form-control" value="<?=$r['seatsReserver']?>">
                                </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_reservationTicket" class="btn btn-primary">
                                            Update Reservation
                                        </button>
                                    </div>

                                </form>
                                <?php
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>