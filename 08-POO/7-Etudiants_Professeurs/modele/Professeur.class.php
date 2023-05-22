<?php
include_once "../modele/Employe.class.php";


Class Professeur extends Employe{
    private string $specialiste;

    ////un constructeur d'initialisation.
    public function __construct($specialiste,$salaire,$id,$nom,$prenom)
    {
        parent::__construct($salaire,$id,$nom,$prenom);
        $this->specialiste = $specialiste;
    }

    // la méthode toString() pour afficher .
    public function __toString():string
    {
        $affiche = "Je suis ".$this->getNom()." ".$this->getSalaire()." ma spécialisation est : ".$this->specialiste;
        return $affiche;
    }
}

?>