<?php
    include '../../config.php';
    class ReservationTicketC{
        public function addReservationTicket($reservationTicket){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('
                    INSERT INTO reservationticket VALUES (NULL, :CIN, :nom, :prenom, :email, :nomEvenement, :dateReservation, :seatsReserver)
                ');
                $req->execute([
                    'CIN' => $reservationTicket->getCin(),
                    'nom' => $reservationTicket->getNom(),
                    'prenom' => $reservationTicket->getPrenom(),
                    'email' => $reservationTicket->getEmail(),
                    'nomEvenement' => $reservationTicket->getNomEvenement(),
                    'dateReservation' => $reservationTicket->getDateReservation(),
                    'seatsReserver' => $reservationTicket->getSeatsReserver()
                ]);
            } catch (Exeption $e){
                die('error: ' . $e->getMesssage());
            }
        }
        public function listReservationTicket(){
            $db = config::getConnexion();
            try{
                $list=$db->query('SELECT * FROM reservationticket');
                return $list;
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function updateReseravtionTicket($idReservation,$reservationTicket){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('UPDATE  reservationticket SET CIN = :CIN, nom = :nom, prenom = :prenom, email = :email, nomEvenement = :nomEvenement, dateReservation = :dateReservation, seatsReserver = :seatsReserver WHERE idReservation = :idReservation
                ');
                $req->execute([
                    'idReservation' => $idReservation,
                    'CIN' => $reservationTicket->getCin(),
                    'nom' => $reservationTicket->getNom(),
                    'prenom' => $reservationTicket->getPrenom(),
                    'email' => $reservationTicket->getEmail(),
                    'nomEvenement' => $reservationTicket->getNomEvenement(),
                    'dateReservation' => $reservationTicket->getDateReservation(),
                    'seatsReserver' => $reservationTicket->getSeatsReserver()
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function getReservationTicket($idReservation){
            $db = config::getConnexion();
            try{
                $resultat=$db->prepare('SELECT * FROM reservationticket WHERE idReservation = :idReservation');
                $resultat->execute([
                    'idReservation' => $idReservation
                ]);
                return $resultat->fetch();
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function deleteReservationTicket($idReservation){
            $db = config::getConnexion();
            echo 'aasba';
            try{
                $req = $db->prepare('DELETE FROM reservationticket  WHERE idReservation = :idReservation');
                    
                $req->execute([
                    'idReservation' => $idReservation
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
    }
    
    class ReservationPlaceC{
        public function addReservationPlace($reservationPlace){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('
                    INSERT INTO reservationplace VALUES (NULL, :CIN, :nom, :prenom, :email, :typeEvenement, :nomEvenement, :dateEvenement, :nbPersonneEstime, :prixTicket)
                ');
                $req->execute([
                    'CIN' => $reservationPlace->getCin(),
                    'nom' => $reservationPlace->getNom(),
                    'prenom' => $reservationPlace->getPrenom(),
                    'email' => $reservationPlace->getEmail(),
                    'typeEvenement' => $reservationPlace->getTypeEvenement(),
                    'nomEvenement' => $reservationPlace->getNomEvenement(),
                    'dateEvenement' => $reservationPlace->getDateEvenement(),
                    'nbPersonneEstime' => $reservationPlace->getnbPersonneEstime(),
                    'prixTicket' => $reservationPlace->getPrixTicket()
                ]);
            } catch (Exeption $e){
                die('error: ' . $e->getMesssage());
            }
        }
        public function listReservationPlace(){
            $db = config::getConnexion();
            try{
                $list=$db->query('SELECT * FROM reservationplace');
                return $list;
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
    }
?>