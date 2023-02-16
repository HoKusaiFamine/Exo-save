<?php

include_once "../modele/Profil.class.php";
include_once "../modele/Personne.class.php";

Class Utilisateur extends Personne {
    private string $login;
    private string $password;
    private string $service;
    private Profil $_profil;

    public function __construct(string $login,string $password,string $service,string $nom,string $prenom,string $mail,string $telephone,int $salaire, Profil $_profil)
    {
        parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
        $this->_profil = $_profil;

        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
    }

    public function affiche(){
        parent::affichage();
        echo " Login ".$this->login." password ".$this->password." du service ".$this->service."\n";
    }
    
    public function calclulerSalaire(): float{
        if ($this->_profil->getCode() == "MN") {
            $nouveauSalaire = $this->salaire + ($this->salaire * (10/100));
            echo "Le salaire a été augmenté de 10% \n";
        }elseif ($this->_profil->getCode() == "DG") {
            $nouveauSalaire = $this->salaire + ($this->salaire * (40/100));
            echo "Le salaire a été augmenté de 40% \n";
        }else {
            $nouveauSalaire = $this->salaire;
        }
        $this->salaire = $nouveauSalaire;
        return $nouveauSalaire;
    }

    /**
     * Get the value of _profil
     */ 
    public function get_profil()
    {
        return $this->_profil;
    }

}



?>