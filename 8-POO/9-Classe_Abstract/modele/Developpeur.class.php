<?php
include_once "../modele/Personne.class.php";

Class Developpeur extends Personne{
    private string $_specialiste;

    public function __construct(string $_specialiste,int $id,string $nom,string $prenom,string $mail,int $telephone,float $salaire){
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
        $this->_specialiste = $_specialiste;
    }
  
    public function calculerSalaire()
    {
        return $this->salaire += ($this->salaire * 20/100);
    }

    public function affichage(){
        echo "Le salaire du développeur ". strtoupper($this->nom)." ".ucfirst($this->prenom)." est : ".$this->calculerSalaire().", sa spécialité :".strtoupper($this->_specialiste)."\n";
        
    }

}





?>