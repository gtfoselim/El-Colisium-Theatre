<?php
    class ReservationPlace{
        private int $CIN;
        private string $nom;
        private string $prenom;
        private string $email;
        private string $typeEvenement;
        private string $nomEvenement;
        private string $dateEvenement;
        private int $nbPersonneEstime;
        private int $prixTicket;

        public function __construct($CIN, $nom, $prenom, $email, $typeEvenement, $nomEvenement, $dateEvenement, $nbPersonneEstime, $prixTicket){
            $this->CIN = $CIN;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->typeEvenement = $typeEvenement;
            $this->nomEvenement = $nomEvenement;
            $this->dateEvenement = $dateEvenement;
            $this->nbPersonneEstime = $nbPersonneEstime;
            $this->prixTicket = $prixTicket;
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

        public function getTypeEvenement(){
            return $this->typeEvenement;
        }

        public function getNomEvenement(){
            return $this->nomEvenement;
        }

        public function getDateEvenement(){
            return $this->dateEvenement;
        }

        public function getnbPersonneEstime(){
            return $this->nbPersonneEstime;
        }

        public function getPrixTicket(){
            return $this->prixTicket;
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

        public function setTypeEvenement($typeEvenement){
            $this->typeEvenement = $typeEvenement;
        }

        public function setNomEvenement($nomEvenement){
            $this->nomEvenement = $nomEvenement;
        }

        public function setDateEvenement($dateEvenement){
            $this->dateEvenement = $dateEvenement;
        }

        public function setnbPersonneEstime($nbPersonneEstime){
            $this->nbPersonneEstime = $nbPersonneEstime;
        }

        public function setPrixTicket($prixTicket){
            $this->prixTicket = $prixTicket;
        }
    }
?>