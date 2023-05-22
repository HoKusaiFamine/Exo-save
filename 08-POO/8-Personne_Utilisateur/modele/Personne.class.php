<?php

Class Personne{
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;

    public static int $code = 0;

    public function __construct(string $nom,string $prenom,string $mail,string $telephone,int $salaire){
        self::$code++;
        $this->id = $this::$code;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;

    }
    public function affichage():void{
        echo "le nom de la personne est ".$this->nom." son prenom est ".$this->prenom." il a pour mail ".$this->mail
                ." Son telephone est :".$this->telephone." avec un salaire de :".$this->salaire."\n";
    }
    }
  


?>