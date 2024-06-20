<?php
include '../config.php';


/*class produitsC
{
    public function listeproduits()
    {
        $db=config::getConnexion();
        try{
            $liste=$db-> query('SELECT * FROM prod');
            return $liste;

        }
        catch (Exception $e) {
            die('error: ' .$e->getMessage());
        }
        }

        public function deleteproduits($id){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('
                    DELETE FROM prod where id=:id
                ');
                $req->execute([
                   'id'=>$id
                ]);
            } catch (Exeption $e){
                die('error: ' . $e->getMesssage());
            }
        }

    public function getproduits($id){
        $db = config::getConnexion();
        try{
            $req = $db->prepare('
               SELECT * FROM prod  WHERE id =:id
            ');
            $req->execute([
                'id' =>$id
              
            ]);
            return $req->fetch();
        } catch (Exeption $e){
            die('error: ' . $e->getMesssage());
        }

    }

    function addproduits($produits)
    {
        $db = config::getConnexion();
        try{
            $req = $db->prepare('
                INSERT INTO prod VALUES (NULL, :nom, :prix, :stock)
            ');
            $req->execute([
                'nom' => $produits->getnom(),
                'prix' => $produits->getprix(),
                'stock' => $produits->getstock()
            ]);
        } catch (Exeption $e){
            die('error: ' . $e->getMesssage());
        }
    }

    public  function updateproduits($id,$produits)
    {
        $db = config::getConnexion();
        try{
            $req = $db->prepare('
                UPDATE  prod SET nom=:n , prix=:p , stock=:st 
                where id =:id
            ');
            $req->execute([
               'id'=> $id,
               'n' => $produits->getnom(),
                'p' => $produits->getprix(),
                'st' => $produits->getstock()

            ]);
        } catch (Exeption $e){
            die('error: ' . $e->getMesssage());
        }
    }
}*/
?>
   
