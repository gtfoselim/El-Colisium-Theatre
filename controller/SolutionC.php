<?php
include_once '../../config.php';
include_once '../../model/Solution.php';
class SolutionC
{
    function afficherSolution()
    {
        $sql = "SELECT * FROM solution";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		}catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
    }
    function supprimerSolution($ID_S)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM solution WHERE ID_S =:ID_S
                ');
                $querry->execute([
                    'ID_S'=>$ID_S
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

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
        
    function ajouteSolution($Solution)
	{
		$sql = "INSERT INTO solution (ID_S,DATE_RESOLUTION,DESCRIPTION,ID_REC) 
			VALUES ( :ID_S, :DATE_RESOLUTION, :DESCRIPTION ,:ID_REC)";
		$db = config::getConnexion();
		try {
            $query = $db->prepare($sql);
			$query->execute([
				'ID_S' => $Solution->getID_S(),
				'DATE_RESOLUTION' => $Solution->getDATE_RESOLUTION()->format('Y/m/d'),
				'DESCRIPTION' => $Solution->getDESCRIPTION(),
                'ID_REC' => $Solution->getID_REC(),
	
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
    
	}
    function recupererSolution($ID_S)
	{
		$sql = "SELECT * from solution where ID_S=$ID_S";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$Solution = $query->fetch();
			return $Solution;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}


}

function modifierSolution($Solution, $ID_S)
{
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
			'UPDATE solution SET 
                    DATE_RESOLUTION=:DATE_RESOLUTION, 
                    DESCRIPTION=:DESCRIPTION, 
					ID_REC=:ID_REC
                WHERE ID_S= :ID_S'
        );
        $query->execute([
            'ID_S' => $Solution->getID_S(),
            'DATE_RESOLUTION' => $Solution->getDATE_RESOLUTION()->format('Y/m/d'),
            'DESCRIPTION' => $Solution->getDESCRIPTION(),
            'ID_REC' => $Solution->getID_REC(),    
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


function triSolution()
        {
            $requete = "select * from solution ORDER BY ID_S";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }


function recherche ($ch){
	$requete = "select * from solution where DESCRIPTION like '%$ch%'";
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


function getSolutionbyID($ID_S)
{
 $requete = "select * from solution where ID_S=:ID_S";
 $config = config::getConnexion();
 try{
	  $querry = $config->prepare($requete);
	  $querry->execute
	    (
		 [
			'ID_S'=>$ID_S
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