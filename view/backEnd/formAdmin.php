<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/styleAdmin.css" rel="stylesheet">

    <title>Reservation Create</title>
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajout reservation Ticket 
                            <a href="tableTicket.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="../actions/ajoutReservationTicket.php" method="POST" id="formTicketAdmin">

                            <div class="mb-3 form-group">
                                <label>CIN</label>
                                <input type="text" name="CIN" class="form-control" id="CINAdmin">
                                <i class="bi-check-circle-fill"></i>
                                <i class="bi-exclamation-circle-fill"></i>
                                <small>error message</small>
                            </div>
                            <div class="mb-3 form-group">
                                <label>Nom</label>
                                <input type="text" name="Nom" class="form-control" id="NomAdmin">
                                <i class="bi-check-circle-fill"></i>
                                <i class="bi-exclamation-circle-fill"></i>
                                <small>error message</small>
                            </div>
                            <div class="mb-3 form-group">
                                <label>Prenom</label>
                                <input type="text" name="Prenom" class="form-control" id="PrenomAdmin">
                                <i class="bi-check-circle-fill"></i>
                                <i class="bi-exclamation-circle-fill"></i>
                                <small>error message</small>
                            </div>
                            <div class="mb-3 form-group">
                                <label>Email</label>
                                <input type="text" name="Email" class="form-control" id="EmailAdmin">
                                <i class="bi-check-circle-fill"></i>
                                <i class="bi-exclamation-circle-fill"></i>
                                <small>error message</small>
                            </div>
                            <div class="mb-3 form-group">
                                <label>Nom de L'evenement</label>
                                <input type="text" name="NomEvenement" class="form-control" id="NomEvenementAdmin">
                                <i class="bi-check-circle-fill"></i>
                                <i class="bi-exclamation-circle-fill"></i>
                                <small>error message</small>
                            </div>
                            <div class="mb-3 form-group">
                                <label>Date de Reservation</label>
                                <input type="date" name="DateReservation" class="form-control" id="DateReservationAdmin">
                                <i class="bi-check-circle-fill"></i>
                                <i class="bi-exclamation-circle-fill"></i>
                                <small>error message</small>
                            </div>
                            
                            <div class="mb-3 form-group">
                                <label>seats Reserver</label>
                                <input type="text" name="seatsReserver" class="form-control" id="seatsReserverAdmin">
                                <i class="bi-check-circle-fill"></i>
                                <i class="bi-exclamation-circle-fill"></i>
                                <small>error message</small>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_reservation" class="btn btn-primary">Save Reservation</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/controleSaisieFormRticket.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>