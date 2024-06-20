<?php
include_once '../../config.php';
include_once '../../model/Reclamation.php';
class ReclamationC
{
    function afficherReclamation()
    {
        $sql = "SELECT * FROM reclamation";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		}catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
    }
    function supprimerReclamation($ID_RECLAMATION)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM reclamation WHERE ID_RECLAMATION =:ID_RECLAMATION
                ');
                $querry->execute([
                    'ID_RECLAMATION'=>$ID_RECLAMATION
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

		
	function loadImage($imagePath) {
        $image = null;
        $imageType = exif_imagetype($imagePath);

        if ($imageType == IMAGETYPE_JPEG) {
            $image = imagecreatefromjpeg($imagePath);
        } else if ($imageType == IMAGETYPE_PNG) {
            $image = imagecreatefrompng($imagePath);
        } else if ($imageType == IMAGETYPE_GIF) {
            $image = imagecreatefromgif($imagePath);
        }

        return $image;
    }
	
    function ajouteReclamation($Reclamation)
	{
		$sql = "INSERT INTO reclamation (ID_RECLAMATION,NAME,image,EMAIL,SUBJECT,MESSAGE) 
			VALUES ( :ID_RECLAMATION, :NAME, :image, :EMAIL, :SUBJECT, :MESSAGE)";
		$db = config::getConnexion();
		try {
            $query = $db->prepare($sql);
			$query->execute([
				'ID_RECLAMATION' => $Reclamation->getID_RECLAMATION(),
				'NAME' => $Reclamation->getNAME(),
				'image' => $Reclamation ->getimage(),
				'EMAIL' => $Reclamation->getEMAIL(),
				'SUBJECT' => $Reclamation->getSUBJECT(),
				'MESSAGE' => $Reclamation->getMESSAGE(),
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
    
	}


    function recupererReclamation($ID_RECLAMATION)
	{
		$sql = "SELECT * from reclamation where ID_RECLAMATION=$ID_RECLAMATION";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();
			$Reclamation = $query->fetch();
			return $Reclamation;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}


}

function modifierReclamation($Reclamation, $ID_RECLAMATION)
{
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
			'UPDATE reclamation SET 
                    NAME=:NAME, 
					image=:image,
                    EMAIL=:EMAIL, 
					SUBJECT=:SUBJECT,
                    MESSAGE=:MESSAGE 
    
                WHERE ID_RECLAMATION= :ID_RECLAMATION '
        );
        $query->execute([
            'ID_RECLAMATION' => $Reclamation->getID_RECLAMATION(),
				'NAME' => $Reclamation->getNAME(),
				'image' => $Reclamation ->getimage(),
				'EMAIL' => $Reclamation->getEMAIL(),
				'SUBJECT' => $Reclamation->getSUBJECT(),
				'MESSAGE' =>$Reclamation->getMESSAGE()
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    
    }


}

function triReclamation()
        {
            $requete = "select * from reclamation ORDER BY ID_RECLAMATION";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th)
             {
                 $th->getMessage();
            }
        }


function recherche ($ch){
	$requete = "select * from Reclamation where NAME like '%$ch%'";
	$config = config::getConnexion();
	try{
		$querry = $config->prepare($requete);
		$querry->execute();
		$result = $querry->fetchALL();
		return $result;
	}catch (PDOException $th){
		$th->getMessage();
	}
}

function getReclamationbyID($ID_RECLAMATION)
{
 $requete = "select * from Reclamation where ID_RECLAMATION=:ID_RECLAMATION";
 $config = config::getConnexion();
 try{
	  $querry = $config->prepare($requete);
	  $querry->execute
	    (
		 [
			'ID_RECLAMATION'=>$ID_RECLAMATION
		 ]
		);
		$result = $querry->fetch();
		return $result ;	
    } catch (PDOException $th)
{
	$th->getMessage();
}
}

}
?>