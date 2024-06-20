<?php
class even
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $categorie = null;
    private ?DateTime $doe = null;
    private ?DateTime $toe = null;
    private ?string $actors = null;
    private ?float $price = null;
    private ?int $tickets = null;

   
    public function __construct($id=null,$n, $t, $d, $te,$a,$p,$ti)
    {
        $this->id = $id;
        $this->nom = $n;
        $this->categorie = $t;
        $this->doe= $d;
        $this->toe = $te;
        $this->actors= $a;
        $this->price = $p;
        $this->tickets  = $ti;
    }

    
    public function getidE()
    {
        return $this->id;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getcategorie()
    {
        return $this->categorie;
    }
    public function getdoe()
    {
        return $this->doe;
    }
    public function gettoe()
    {
        return $this->toe;
    }
    public function getactors()
    {
        return $this->actors;
    }
    public function getprice()
    {
        return $this->price;
    }
    public function gettickets()
    {
        return $this->tickets;
    }
    

   
    public function setidE($id)
    {
        $this->id = $id;

        return $this;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    public function setcategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
    public function setdoe($doe)
    {
        $this->doe = $doe;

        return $this;
    }
    public function settoe($toe)
    {
        $this->toe = $toe;

        return $this;
    }
    public function setactors($actors)
    {
        $this->actors = $actors;

        return $this;
    }
    public function setprice($price)
    {
        $this->price = $price;

        return $this;
    }
    public function settickets($tickets)
    {
        $this->tickets = $tickets;

        return $this;
    }
}
?>