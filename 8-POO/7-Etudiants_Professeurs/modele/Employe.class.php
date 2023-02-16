<?php
include_once "../modele/Personne.class.php";

// La classe Etudiant hérite de la classe Personne.
Class Employe extends Personne{
    private string $salaire;

   //un constructeur d'initialisation. 
    public function __construct($salaire,$id,$nom,$prenom)
    {
        parent::__construct($id,$nom,$prenom);
        $this->salaire = $salaire;
    }

    // la méthode toString() pour afficher .
    public function __toString()
    {
        $affichage = "Je suis ".$this->getNom()." ".$this->getPrenom()." mon salaire est : ".$this->salaire."€";
        return $affichage;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}



?>