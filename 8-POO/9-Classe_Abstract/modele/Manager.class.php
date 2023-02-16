<?php
include_once "../modele/Personne.class.php";

Class Manager extends Personne{
    private string $service;

    public function __construct(string $service,int $id,string $nom,string $prenom,string $mail,int $telephone,float $salaire)
    {
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $service;
    }
    public function calculerSalaire()
    {
        return $this->salaire += ($this->salaire * 35/100);
    }
    public function affichage(){
        echo "Le salaire du manager ". strtoupper($this->nom)." ".ucfirst($this->prenom)." est : ".$this->calculerSalaire().", son service : ".ucfirst($this->service)."\n";
        
    }
}



?>