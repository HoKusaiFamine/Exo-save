<?php

Class Point{
    private $abcisse;
    private $ordonne;

    public function __construct(float $x,float $y){
        $this->abcisse = $x;
        $this->ordonne = $y;  
    }

    public function afficher (){
        $y = $this->getAbcisse();
        $x = $this->getOrdonne();
        echo "POINT(".$y.",".$x.")";
    }
    /**
     * Get the value of abcisse
     */ 
    public function getAbcisse()
    {
        return $this->abcisse;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */ 
    public function setAbcisse($abcisse)
    {
        $this->abcisse = $abcisse;

        return $this;
    }

    /**
     * Get the value of ordonne
     */ 
    public function getOrdonne()
    {
        return $this->ordonne;
    }

    /**
     * Set the value of ordonne
     *
     * @return  self
     */ 
    public function setOrdonne($ordonne)
    {
        $this->ordonne = $ordonne;

        return $this;
    }

    public function norme(){
        $distance= sqrt(($this->abcisse*$this->abcisse)+($this->ordonne*$this->ordonne));
        return "la norme du point (".$this->abcisse.","."$this->ordonne".") est : "."$distance";
    }
}





?>