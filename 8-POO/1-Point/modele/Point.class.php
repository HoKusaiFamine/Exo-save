<?php
//Définir une classe Point caractérisée par son abscisse et son ordonné.
Class Point{
    private $abscisse;
    private $ordonne;

//Définir le constructeur par défaut 
    public function __construct($abscisse,$ordonne){
      //et d’initialisation de la classe. 
        $this->abscisse = $abscisse;
        $this->ordonne = $ordonne;
    }
   //Définir à l’aide des getters et les setters les méthodes d’accès aux attributs de la classe.
        /**
         * Get the value of abscisse
         */ 
        public function getAbscisse()
        {
                return $this->abscisse;
        }

        /**
         * Set the value of abscisse
         *
         * @return  self
         */ 
        public function setAbscisse($abscisse)
        {
                $this->abscisse = $abscisse;

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

    //Définir la méthode Norme ( ) qui retourne la distance entre l’origine du repère et le point en cours.
    public function Norme(){
        //recuper les valeurs via get
        $abscisse = $this->getAbscisse();
        $ordonne = $this->getOrdonne();

        $norme = sqrt($abscisse**2 + $ordonne**2);
        return $norme;
    }
}

?>