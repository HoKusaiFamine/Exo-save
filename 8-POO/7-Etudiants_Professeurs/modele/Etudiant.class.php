<?php
include_once "../modele/Personne.class.php";
Class Etudiant extends personne {
   
    private string $cne;

    ////un constructeur d'initialisation.
    public function __construct($cne,$id,$nom,$prenom) 
    {
        parent::__construct($id,$nom,$prenom);
        $this->cne = $cne;
    }

    // la méthode toString() pour afficher .
    public function __toString()
    {
        $affichage = "je suis ".$this->getNom()." ".$this->getPrenom()." et mon cne est : ".$this->cne;
        return $affichage;
    }
}



?>