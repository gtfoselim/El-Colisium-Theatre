<?php
class Reclamation{
    private  $id_Reclamation = null;
    private  $name = null ;
    private  $image = null ; 
    private  $email =null ;
    private  $subject = null ; 
    private  $message = null ;
    public function __construct($id_Reclamation=NULL,$name,$image,$email,$subject,$message){
        $this->id_Reclamation= $id_Reclamation ; 
        $this->name= $name ; 
        $this->image= $image ; 
        $this->email= $email ;
        $this->subject= $subject ;
        $this->message= $message ;
    }
    public function getID_RECLAMATION(){
        return $this->id_Reclamation ;
     }
    
    public function getNAME(){
        return $this->name ;
     }
    public function setNAME(){
        $this->name= $name ;
        return $this ;
     }

     public function getimage(){
        return $this->image ;
     }
    public function setimage(){
        $this->image= $image ;
        return $this ;
     }

    public function getEMAIL(){
        return $this->email ; 
     }
    public function setEMAIL(){
        $this->email= $email ;
        return $this ; 
     }
    public function getSUBJECT(){
        return $this->subject ; 
     }
    public function setSUBJECT(){
        $this->subject= $subject ;
        return $this ; 
     }
     public function getMESSAGE(){
        return $this->message ; 
     }
    public function setMESSAGE(){
        $this->message= $message ;
        return $this ; 
     }
    
}
?>