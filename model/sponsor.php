<?php
class sponsor
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?int $id_even = null;
    private ?string $imagee = null;
    

   
    public function __construct($id=null,$n, $t, $d)
    {
        $this->id = $id;
        $this->nom = $n;
        $this->id_even = $t;
        $this->imagee= $d;
      
    }

    
    public function getid()
    {
        return $this->id;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getid_even()
    {
        return $this->id_even;
    }
    public function getimage()
    {
        return $this->imagee;
    }
   

   
    public function setid($id)
    {
        $this->id = $id;

        return $this;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    public function setid_even($id_even)
    {
        $this->id_even = $id_even;

        return $this;
    }
    public function setimage($image)
    {
        $this->imagee = $image;

        return $this;
    }

}
?>