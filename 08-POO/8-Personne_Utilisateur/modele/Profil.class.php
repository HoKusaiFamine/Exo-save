<?php

Class Profil{
    private int $id;
    private string $code;
    private string $libelle;

    public static int $incrementation = 0;

    public function __construct(string $code,string $libelle)
    {
        self::$incrementation++;
        $this->id = $this::$incrementation;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    

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
}



?>