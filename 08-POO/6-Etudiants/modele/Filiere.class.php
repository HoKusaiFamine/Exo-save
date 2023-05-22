<?php

//creation de la classe filiere
Class Filiere{
    private int $id;
    private string $code;
    private string $libelle;

    private static int $count = 0;

    //constructeur d’initialisation
    public function __construct($code, $libelle)
    {
        self::$count++;
        $this->id = self::$count;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function __toString():string
    {      
        $affiche = "   ". $this->libelle;
        return $affiche;
    }

    // public function listeFiliere(){
    //     $affiche = $this->libelle;
    //     return $affiche;
    // }
    

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
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
}



?>