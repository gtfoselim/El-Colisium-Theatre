<?php
require '../../config.php';
class evenC
{
    public function afficher()
    {
        $sql = "SELECT * FROM even";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

   
    public function deleteEvent($id){
        $db = config::getConnexion();
        try{
            $req = $db->prepare('
                DELETE FROM even where id=:id
            ');
            $req->execute([
               'id'=>$id
            ]);
        } catch (Exeption $e){
            die('error: ' . $e->getMesssage());
        }
    }





    function addEvent($event)
    {
        $sql = "INSERT INTO even
        VALUES (null, :nom,:categorie, :doe,:toe,:actors,:price,:tickets)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
               
                'nom' => $event->getnom(),
                'categorie' => $event->getcategorie(),
                'doe' => $event->getdoe()->format('Y/m/d'),
                'toe'=>$event->gettoe()->format('h:i:A'),
                'actors'=>$event->getactors(),
                'price'=>$event->getprice(),
                'tickets'=>$event->gettickets()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function updateEvent($event, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE even SET 
                    nom = :nom, 
                    categorie = :categorie, 
                    doe = :doe, 
                    toe = :toe,
                    actors= :actors,
                    price=:price,
                    tickets=:tickets
                WHERE id= :id'
            );
            $query->execute([
                'id'=>$id,
                'nom' => $event->getnom(),
                'categorie' => $event->getcategorie(),
                'doe' => $event->getdoe()->format('Y/m/d'),
                'toe'=>$event->gettoe()->format('h:i:A'),
                'actors'=>$event->getactors(),
                'price'=>$event->getprice(),
                'tickets'=>$event->gettickets()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }




   

    function getEvent($id){
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
}
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
?>