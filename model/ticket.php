<?php
    class Ticket{
        private string $nom;
        private string $prenom;
        private string $nomEvenement;
        private string $dateReservation;
        private string $seatReserver;

        public function __construct($nom, $prenom, $nomEvenement, $dateReservation, $seatReserver){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->nomEvenement = $nomEvenement;
            $this->dateReservation = $dateReservation;
            $this->seatReserver = $seatReserver;
        }

        public function getNom(){
            return $this->nom;
        }
        
        public function getPrenom(){
            return $this->prenom;
        }
        
        public function getNomEvenement(){
            return $this->nomEvenement;
        }

        public function getDateReservation(){
            return $this->dateReservation;
        }

        public function getSeatReserver(){
            return $this->seatReserver;
        }
        
        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setNomEvenement($nomEvenement){
            $this->nomEvenement = $nomEvenement;
        }

        public function setDateReservation($dateReservation){
            $this->dateReservation = $dateReservation;
        }

        public function setSeatReserver($seatReserver){
            $this->seatReserver = $seatReserver;
        }
    }
?>