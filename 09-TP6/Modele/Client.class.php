<?php
include_once "../Modele/Compte.class.php";
//Définir une classe Client avec les attributs suivants : CIN, Nom, Prénom, Tél.
    Class Client{
        private $cin;
        private $nom;
        private $prenom;
        private $tel;

//Définir un constructeur permettant d’initialiser tous les attributs.
        public function __construct(string $cin,string $nom,string $prenom,int $tel)
        {
            $this->cin = $cin;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->tel = $tel;
        }
//Définir la méthode Afficher ( ) permettant d’afficher les informations du Client en cours.
        public function afficher(): string{
            $afficher = "cin :".$this->cin."\n"."Nom :".$this->nom."\n"."PRENOM :".$this->prenom."\n"."Tel :".$this->tel;
            return $afficher;
        }
//Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe.
        /**
         * Get the value of cin
         */ 
        public function getCin()
        {
                return $this->cin;
        }

        /**
         * Set the value of cin
         *
         * @return  self
         */ 
        public function setCin($cin)
        {
                $this->cin = $cin;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of tel
         */ 
        public function getTel()
        {
                return $this->tel;
        }

        /**
         * Set the value of tel
         *
         * @return  self
         */ 
        public function setTel($tel)
        {
                $this->tel = $tel;

                return $this;
        }

    }




?>