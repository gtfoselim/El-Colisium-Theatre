<?php
    include '../../Controller/TicketC.php';
    include '../../Model/Ticket.php';

    $TicketC = new TicketC();
    if(isset($_POST['update_reservationTicket'])){
        $Ticket = new Ticket($_POST['Nom'], $_POST['Prenom'], $_POST['NomEvenement'], $_POST['DateEvenement'], $_POST['seat']);
        $TicketC->updateTicket($_GET['id'],$Ticket);
        header('Location:../backEnd/tableVerifiedTickets.php');
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

    <title>Ticket Update</title>
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ticket Update 
                            <a href="../backEnd/tableVerifiedTickets.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $r=$TicketC->getTicket($_GET['id']);
                                ?>
                                <form method="POST">
                                <div class="mb-3">
                                    <label>Nom</label>
                                    <input type="text" name="Nom" class="form-control" value="<?=$r['nom']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Prenom</label>
                                    <input type="text" name="Prenom" class="form-control" value="<?=$r['prenom']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Nom de L'evenement</label>
                                    <input type="text" name="NomEvenement" class="form-control" value="<?=$r['nomEvenement']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Date de L'evenement</label>
                                    <input type="date" name="DateEvenement" class="form-control" value="<?=$r['dateEvenement']?>">
                                </div>
                                <div class="mb-3">
                                    <label>Seat</label>
                                    <input type="text" name="seat" class="form-control" value="<?=$r['seat']?>">
                                </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_reservationTicket" class="btn btn-primary">
                                            Update Ticket
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