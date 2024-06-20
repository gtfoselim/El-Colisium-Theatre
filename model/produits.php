<?php
class produit
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $prix = null;
    private ?int $stock= null;
    
   

    public function __construct(string $n, string $p, int $st )
    {
        
        $this->nom = $n;
        $this->prix = $p;
        $this->stock= $st;
       
      
    }

    
    public function getId()
    {
        return $this->id;
    }

   
  
    public function getnom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setprix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
    public function getstock()
    {
        return $this->stock;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */
    public function setstock($stock)
    {
        $this->stock= $stock;

        return $this;
    }

    /**
     * Get the value of image
     */
    /*public function getimage()
    {
        return $this->image;
    }*/

    /**
     * Set the value of image
     *
     * @return  self
     */
   /* public function setimage($image)
    {
        $this->image = $image;

        return $this;
    }*/

}