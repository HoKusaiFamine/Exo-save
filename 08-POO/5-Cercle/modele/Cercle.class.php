<?php
include_once "../modele/Point.class.php";
Class Cercle {
    private Point $_centre;
    private $rayon;

    public function __construct($x, $y,$rayon){
        $this->_centre = new Point($x, $y);
        $this->rayon = $rayon;
    }

    public function getPerimetre(){
        $pi = pi();
        $rayon = $this->getRayon();
        $peri = ($pi*2) * $rayon;
        return $peri;
    }

    public function getSurface(){
        $pi = pi();
        $rayon = $this->getRayon();
        $surface = $pi * $rayon * $rayon;
        return $surface;

    }

    public function afficher(): string{
        $cercle = "CERCLE(".$this->_centre->getAbcisse().",".$this->_centre->getOrdonne().",".$this->rayon.")";
        return $cercle;
        // $abscisse = $this->getAbcisse();
        // $ordonne = $this->getOrdonne();
        // $rayon = $this->getRayon();
        //echo "POINT(".$abscisse.",".$ordonne.",".$rayon.")";
    }

    public function appartient ($x,$y): string{
        if ((($x - $this->_centre->getAbcisse())**2) + (($y - $this->_centre->getOrdonne())**2) < $this->rayon**2) {
            $reponse = "Le point appartient au cercle";
        }else{
            $reponse = "Le point n'appartient pas au cercle";
        }
        return $reponse;
 }
    

    /**
     * Get the value of _centre
     */ 
    public function get_centre()
    {
        return $this->_centre;
    }

    /**
     * Set the value of _centre
     *
     * @return  self
     */ 
    public function set_centre($_centre)
    {
        $this->_centre = $_centre;

        return $this;
    }

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }
}

?>