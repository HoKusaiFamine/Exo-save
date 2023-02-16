<?php
include_once "../modele/Filiere.class.php";

//creation de la classe etidiant
Class Etudiant {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private Filiere $__proprietaire;
    private static int $count = 0; 

    //constructeur d’initialisation
    public function __construct(string $nom, string $prenom, string $dateNaissance,$__proprietaire )
    {
        self::$count++;
        $this->id = $this::$count;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->__proprietaire = $__proprietaire;

    }
    //methode d affichage
    public function __toString(): string{
        $afficher = "Je suis ".$this->prenom. " ".$this->nom. " et ma date de naissance est: ".$this->dateNaissance."\n";
        return $afficher;
        
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

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of __proprietaire
     */ 
    public function get__proprietaire()
    {
        return $this->__proprietaire;
    }

    /**
     * Set the value of __proprietaire
     *
     * @return  self
     */ 
    public function set__proprietaire($__proprietaire)
    {
        $this->__proprietaire = $__proprietaire;

        return $this;
    }

    /**
     * Get the value of count
     */ 
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set the value of count
     *
     * @return  self
     */ 
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }


}



?>