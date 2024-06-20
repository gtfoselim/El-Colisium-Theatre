<?php
class Solution{
    private  $ID_S = null;
    private DateTime $DATE_RESOLUTION;
    private  $DESCRIPTION = null ;
    private  $ID_REC = null ;
    public function __construct($ID_S=NULL,$DATE_RESOLUTION,$DESCRIPTION,$ID_REC){
        $this->ID_S= $ID_S ; 
        $this->DATE_RESOLUTION= $DATE_RESOLUTION ;
        $this->DESCRIPTION= $DESCRIPTION ;
        $this->ID_REC= $ID_REC ;
    
    }
    public function getID_S(){
        return $this->ID_S ;
     }
     public function getDATE_RESOLUTION(){
        return $this->DATE_RESOLUTION ;
     }
    public function setDATE_RESOLUTION(){
        $this->DATE_RESOLUTION= $DATE_RESOLUTION ;
        return $this ;
     }
   
     public function getDESCRIPTION(){
        return $this->DESCRIPTION ; 
     }
    public function setDESCRIPTION(){
        $this->DESCRIPTION= $DESCRIPTION ;
        return $this ; 
     }

     public function getID_REC(){
        return $this->ID_REC ; 
     }
    public function setID_REC(){
        $this->ID_REC= $ID_REC ;
        return $this ; 
     }

   
    
}
?>