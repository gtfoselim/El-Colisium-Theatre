<?php
    include '../../config.php';
    class TicketC{

        public function afficher(){
            $sql = "SELECT * FROM even";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Error:' . $e->getMessage());
            }
        }
            public function getEvent($id){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('
                   SELECT * FROM even  WHERE id =:id
                ');
                $req->execute([
                    'id' =>$id
                  
                ]);
                return $req->fetch();
            } catch (Exeption $e){
                die('error: ' . $e->getMesssage());
            }
        
          }

        public function verifyTicket($idReservation){
            $db = config::getConnexion();
            try{
                $req = $db->prepare("
                INSERT INTO tickets (nom, prenom, nomEvenement, dateEvenement, seat)
                SELECT nom, prenom, nomEvenement, dateReservation, SUBSTRING_INDEX(SUBSTRING_INDEX(seatsReserver, ' ', numbers.n), ' ', -1) as seat
                FROM reservationticket
                CROSS JOIN (
                    SELECT 1 as n UNION ALL
                    SELECT 2 UNION ALL
                    SELECT 3 UNION ALL
                    SELECT 4 UNION ALL
                    SELECT 5
                ) numbers
                WHERE idReservation=:idReservation AND n <= 1 + (LENGTH(seatsReserver) - LENGTH(REPLACE(seatsReserver, ' ', '')));
                DELETE FROM tickets  WHERE seat = ' '
                ");
                $req->execute([
                    'idReservation' => $idReservation,
                ]);
            } catch (Exeption $e){
                die('error: ' . $e->getMesssage());
            }

        }
        public function listTicket(){
            $db = config::getConnexion();
            try{
                $list=$db->query('SELECT * FROM tickets');
                //echo ($list);
                return $list;
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function addTicket($Ticket){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('
                    INSERT INTO tickets VALUES (NULL, :nom, :prenom, :nomEvenement, :dateReservation, :seat)
                ');
                $req->execute([
                    'nom' => $Ticket->getNom(),
                    'prenom' => $Ticket->getPrenom(),
                    'nomEvenement' => $Ticket->getNomEvenement(),
                    'dateReservation' => $Ticket->getDateReservation(),
                    'seat' => $Ticket->getSeatReserver()
                ]);
            } catch (Exeption $e){
                die('error: ' . $e->getMesssage());
            }
        }
        public function deleteTicket($id){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('DELETE FROM tickets  WHERE id = :id');
                    
                $req->execute([
                    'id' => $id
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function updateTicket($id,$Ticket){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('UPDATE  tickets SET nom = :nom, prenom = :prenom, nomEvenement = :nomEvenement, dateEvenement = :dateEvenement, seat = :seat WHERE id = :id
                ');
                $req->execute([
                    'id' => $id,
                    'nom' => $Ticket->getNom(),
                    'prenom' => $Ticket->getPrenom(),
                    'nomEvenement' => $Ticket->getNomEvenement(),
                    'dateEvenement' => $Ticket->getDateReservation(),
                    'seat' => $Ticket->getSeatReserver()
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function getTicket($id){
            $db = config::getConnexion();
            try{
                $resultat=$db->prepare('SELECT * FROM tickets WHERE id = :id');
                $resultat->execute([
                    'id' => $id
                ]);
                return $resultat->fetch();
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
        public function rechercheSeat($seat){
            $db = config::getConnexion();
            try{
                $resultat=$db->prepare('SELECT * FROM tickets WHERE seat = :seat ');
                $resultat->execute([
                    'seat' => $seat
                ]);
                return $resultat->fetch();
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
        
    }
?>