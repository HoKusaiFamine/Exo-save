<?php
//Définir une classe Rectangle
Class Rectangle{
    //ayant les attributs suivants : Longueur et Largeur.
    private $longueur;
    private $largeur;
    //Ajouter un constructeur d’initialisation.
    public function __construct($longueur,$largeur){

        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
//Ajouter les méthodes suivantes :périmètre ( ) : retourne le périmètre du rectangle.
    public function perimetre(): string{
        $perimetre =  ($this->longueur*2)+($this->largeur*2);
        return "Le perimetre est de : " . $perimetre;
    }
//Ajouter les méthodes suivantes :aire( ) : retourne l'aire du rectangle.
   public function aire(){
        $air = ($this->longueur)*($this->largeur);
        return "L'air  est de  : " . $air;
   }
//Ajouter les méthodes suivantes :estCarre( ) : vérifie si le rectangle est un carré.
   public function estCarre(): bool {
        if ($this->longueur == $this->largeur) {
            return true;   
        }else {
            return false;
        }
       
   }
//Ajouter les méthodes suivantes :afficherRectangle( ) :
   public function afficherRectangle(): string{
    //si meme longuer carre sinon pas carree
        if ($this->longueur == $this->largeur) {
            $perimetre =  ($this->longueur*2)+($this->largeur*2);
            $air = ($this->longueur)*($this->largeur);
            return "- Longeur : ".$this->longueur."- Largeur : ".$this->largeur."- Périmétre : ".$perimetre."- Aire : ".$air."- il s'agit d'un carré";
        }else {
            $perimetre =  ($this->longueur*2)+($this->largeur*2);
            $air = ($this->longueur)*($this->largeur);
            return "- Longeur : ".$this->longueur."- Largeur : ".$this->largeur."- Périmétre : ".$perimetre."- Aire : ".$air."- il ne s'agit pas d'un carré";
        }
       
   }

    /**
     * Get the value of longueur
     */ 
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set the value of longueur
     *
     * @return  self
     */ 
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get the value of largeur
     */ 
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     *
     * @return  self
     */ 
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }
}
?>