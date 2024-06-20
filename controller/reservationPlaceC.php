<?php
    include '../../config.php';
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
        public function getReservationPlace($idReservation){
            $db = config::getConnexion();
            try{
                $resultat=$db->prepare('SELECT * FROM reservationplace WHERE idReservation = :idReservation');
                $resultat->execute([
                    'idReservation' => $idReservation
                ]);
                return $resultat->fetch();
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function updateReseravtionPlace($idReservation,$reservationPlace){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('UPDATE  reservationplace SET CIN = :CIN, nom = :nom, prenom = :prenom, email = :email, typeEvenement = :typeEvenement, nomEvenement = :nomEvenement, dateEvenement = :dateEvenement, nbPersonneEstime = :nbPersonneEstime, prixTicket = :prixTicket WHERE idReservation = :idReservation
                ');
                $req->execute([
                    'idReservation' => $idReservation,
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
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function deleteReservationPlace($idReservation){
            $db = config::getConnexion();
            echo 'aasba';
            try{
                $req = $db->prepare('DELETE FROM reservationplace  WHERE idReservation = :idReservation');
                    
                $req->execute([
                    'idReservation' => $idReservation
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
    }
?>