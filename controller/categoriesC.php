<?php


class categoriesC
{
    public function listecategoris()
    {

       
        require_once '../config.php';
        $id=$_GET['id'];
        $sqlstate = $pdo->prepare("SELECT * FROM categorie where id=?");
        $sqlstate->execute([$id]);
        $categorie=$sqlstate->fetch(PDO::FETCH_ASSOC);//affichage 1 seul cat
        
        
        $sqlstate = $pdo->prepare("SELECT * FROM produit where id_categorie=?");
        $sqlstate->execute([$id]);
        $produits=$sqlstate->fetchALL(PDO::FETCH_OBJ);

    }
}

    ?>