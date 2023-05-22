<?php
include_once "../Modele/Client.class.php";


//réer Une classe Compte caractérisée par son solde et un code qui
// est incrémenté lors de sa création 
    Class Compte{
//ainsi que son propriétaire qui représente un client.
        private Client $_proprietaire;    
        private $solde = 0 ;
        private $compte;
        public static int $code = 0;

//Définir un constructeur permettant de créer un compte en indiquant son propriétaire.
        public function __construct($cin,$nom,$prenom,$tel){
                self::$code++;
            $this->_proprietaire = new Client($cin,$nom,$prenom,$tel);
            $this->compte = $this::$code;           
        }
//Une méthode permettant de crediter le compte, prenant une somme en paramètre.       
        public function crediter($somme): void {
                //self::ValiderDepot($sommeCrediter);
                $newSolde = $this->solde + $somme;
                $this->solde = $newSolde;
                echo "Opération bien effectuée";              
        }
//Une méthode permettant de debiter() le compte, prenant une somme en paramètre
        public function debiter($somme): void {              
                $newSolde = $this->solde - $somme;
                $this->solde = $newSolde;
                echo "Opération bien effectuée";            
        }
//Une méthode qui permet d’afficher le résumé d’un compte.
        public function afficherCompte(){
                //echo "numeros de compte :".$this->getCompte()."\n";
                echo "numeros de compte :".$this->getCompte()."\n"."Solde du compte :".$this->getSolde()."\n"."Propietaire du compte :\n".$this->_proprietaire->afficher();

                // echo "cin :".$this->_proprietaire->getCin()."\n";
                // echo "Nom :".$this->_proprietaire->getNom()."\n";
                // echo "Prenom :".$this->_proprietaire->getPrenom()."\n";
                // echo "Tel :".$this->_proprietaire->getTel()."\n";             
        }
//Une méthode permettant de crediterCpt() le compte, prenant une somme et 
//  un compte en paramètres, créditant le compte et débitant le compte passé en paramètres.       
        public function crediterCompte($somme,$compte){               
                $newSolde = $this->solde - $somme;
                $this->solde = $newSolde;
                $compte->solde = $compte->getSolde()+$somme;
                echo "Opération bien effectuée\n";
            }
//Une méthode permettant de débiterCpt() le compte, prenant une somme et
//   un compte bancaire en paramètres, débitant le compte et créditant le compte passé en paramètres
            public function debiterCompte($somme,$compte){               
                $newSolde = $this->solde + $somme;
                $this->solde = $newSolde;
                $compte->solde = $compte->getSolde()-$somme;
                echo "Opération bien effectuée\n";
            }
//Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe 
//          (le numéro de compte et le solde sont en lecture seule)    
        /**
         * Get the value of solde
         */ 
        public function getSolde()
        {
                return $this->solde;
        }
        /**
         * Get the value of code
         */ 
        public function getCode()
        {
                return $this->code;
        }
        /**
         * Get the value of _proprietaire
         */ 
        public function get_proprietaire()
        {
                return $this->_proprietaire;
        }

        /**
         * Set the value of _proprietaire
         *
         * @return  self
         */ 
        public function set_proprietaire($_proprietaire)
        {
                $this->_proprietaire = $_proprietaire;

                return $this;
        }
     
   
       

        /**
         * Get the value of compte
         */ 
        public function getCompte()
        {
                return $this->compte;
        }

        /**
         * Set the value of compte
         *
         * @return  self
         */ 
        public function setCompte($compte)
        {
                $this->compte = $compte;

                return $this;
        }
    }


?>