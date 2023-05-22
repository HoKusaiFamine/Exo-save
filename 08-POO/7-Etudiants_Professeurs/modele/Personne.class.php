<?php

Class Personne{

    private int $id;
    private string $nom;
    private string $prenom;

    //un constructeur d'initialisation.
    public function __construct($id,$nom,$prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // la méthode toString() pour afficher .
    public function __toString()
    {
        $affichage = $this->id.$this->prenom.$this->nom; 
        return $affichage;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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
}



?>