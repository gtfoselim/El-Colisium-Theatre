<?php
    class ReservationTicket{
        private int $CIN;
        private string $nom;
        private string $prenom;
        private string $email;
        private string $nomEvenement;
        private string $dateReservation;
        private int $nbPlace;
        private string $typePlace;

        public function __construct($CIN, $nom, $prenom, $email, $nomEvenement, $dateReservation, $seatsReserver){
            $this->CIN = $CIN;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->nomEvenement = $nomEvenement;
            $this->dateReservation = $dateReservation;
            $this->seatsReserver = $seatsReserver;
        }
        
        public function getCin(){
            return $this->CIN;
        }

        public function getNom(){
            return $this->nom;
        }
        
        public function getPrenom(){
            return $this->prenom;
        }
        
        public function getEmail(){
            return $this->email;
        }

        public function getNomEvenement(){
            return $this->nomEvenement;
        }

        public function getDateReservation(){
            return $this->dateReservation;
        }

        public function getSeatsReserver(){
            return $this->seatsReserver;
        }

        public function setCin($CIN){
            $this->CIN = $CIN;
        }
        
        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setNomEvenement($nomEvenement){
            $this->nomEvenement = $nomEvenement;
        }

        public function setDateReservation($dateReservation){
            $this->dateReservation = $dateReservation;
        }

        public function setSeatsReserver($seatsReserver){
            $this->seatsReserver = $seatsReserver;
        }
    }
?>