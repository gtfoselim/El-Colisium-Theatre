<?php
require '../../config.php';


class sponsorC
{  
    
    public function afficherSponsor()
    {
        $sql = "SELECT sponsor.* ,even.nom as 'nom_even' FROM sponsor INNER JOIN even ON sponsor.id_even= even.id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addSponsor($event)
    {
        $sql = "INSERT INTO sponsor
        VALUES (null, :nom,:id_even, :imagee)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
               
                'nom' => $event->getnom(),
                'id_even' => $event->getid_even(),
                'imagee'=>$event->getimage()
               
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateSponsor($event, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE sponsor SET 
                    nom = :nom, 
                    id_even = :id_even, 
                    imagee = :imagee 
                    
                WHERE id= :id'
            );
            $query->execute([
                'id'=>$id,
                'nom' => $event->getnom(),
                'id_even' => $event->getid_even(),
                'imagee' => $event->getimage()
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getSponsor($id){
        $db = config::getConnexion();
        try{
            $req = $db->prepare('
               SELECT * FROM sponsor  WHERE id =:id
            ');
            $req->execute([
                'id' =>$id
              
            ]);
            return $req->fetch();
        } catch (Exeption $e){
            die('error: ' . $e->getMesssage());
        }
    
      }

      public function deleteSponsor($id){
        $db = config::getConnexion();
        try{
            $req = $db->prepare('
                DELETE FROM sponsor where id=:id
            ');
            $req->execute([
               'id'=>$id
            ]);
        } catch (Exeption $e){
            die('error: ' . $e->getMesssage());
        }
    }

}