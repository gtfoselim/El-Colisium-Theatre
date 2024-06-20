<?php
    include '../../Controller/reservationPlaceC.php';
    include '../../Model/reservationPlace.php';

    $reservationPlaceC = new ReservationPlaceC();
    if(isset($_POST['update_reservationPlace'])){
        $reservationPlace = new ReservationPlace($_POST['CIN'], $_POST['Nom'], $_POST['Prenom'], $_POST['Email'], $_POST['typeEvenement'], $_POST['NomEvenement'], $_POST['DateEvenement'], $_POST['nbPersonneEstime'], $_POST['PrixTicket']);
        $reservationPlaceC->updateReseravtionPlace($_GET['idReservation'],$reservationPlace);
        header('Location:../backEnd/tablePlace.php');
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
                        <h4>Reservation Place Update 
                            <a href="../backEnd/tablePlace.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['idReservation']))
                        {
                            $r=$reservationPlaceC->getReservationPlace($_GET['idReservation']);
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
                                        <select class="form-control" name="typeEvenement" id="typeEvenement">
                                            <option value="0">Select Your Type:</option>
                                            <option value="Parterre">Parterre</option>
                                            <option value="Corbeille">Corbeille</option>
                                            <option value="Balcon">Balcon</option>
                                            <option value="Paradis">Paradis</option>
                                        </select>
                                    <div class="mb-3">
                                        <label>Nom de L'evenement</label>
                                        <input type="text" name="NomEvenement" class="form-control" value="<?=$r['nomEvenement']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Date de l'evenement</label>
                                        <input type="date" name="DateEvenement" class="form-control" value="<?=$r['dateEvenement']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nombre de personne estimés</label>
                                        <input type="number" name="nbPersonneEstime" class="form-control" value="<?=$r['nbPersonneEstime']?>">
                                    </div>
                                    <div class="mb-3">
                                        <label>Prix du Ticket</label>
                                        <input type="number" name="PrixTicket" class="form-control" value="<?=$r['prixTicket']?>">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_reservationPlace" class="btn btn-primary">
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