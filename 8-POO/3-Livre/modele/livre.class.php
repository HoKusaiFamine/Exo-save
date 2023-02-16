<?php
//Définir une classe Livre avec les attributs suivants : Titre, Auteur (Nom complet), Prix.
Class Livre{
    private $titre;
    private $auteur;
    private $prix;
    
//Définir un constructeur permettant d’initialiser
//les attributs de la méthode par des valeurs saisies par l’utilisateur
    public function __construct($titre,$auteur,$prix) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    } 
    // methode affichage permettant d’afficher les informations du livre en cours. 
    public function afficher() {
        $affiche = "Le titre est ".$this->titre."\n"."L'auteur est ".$this->auteur."\n"."le prix est ".$this->prix."\n";
        echo $affiche;
        $affichage2 = "Titre: ".$this->titre.", Auteur:".$this->auteur.",Prix: ".$this->prix;
        echo $affichage2;
    }
    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}


?>