<?php
//Définir une classe Employé caractérisée par des attibut
//    Matricule, Nom, Prénom, DateNaissance, DateEmbauche, Salaire.
Class Employe {
    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;
    
//un constructeur permettant d’initialiser les attributs de la méthode par des valeurs saisies par l’utilisateur.
    public function __construct($matricule,$nom,$prenom,$dateNaissance,$dateEmbauche,$Salaire){
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $Salaire;
    }
//Ajouter à la classe la méthode age( ) qui retourne l’âge de l’employé.
    public function age() : string{
        $dateNaiss = $this->getDateNaissance();
        $aujourdhui = date("d-m-Y");
        $age = date_diff(date_create($dateNaiss), date_create($aujourdhui));
        $ageEmployer = $age->format('%y');
        return $ageEmployer;
    }
//Ajouter à la classe la méthode anciennete( ) qui retourne le nombre d’années d’ancienneté de l’employé.
    public function anciennete():string{
        $dateEmbauche = $this->getDateEmbauche();
        $aujourdhui = date("d-m-Y");
        $callAncienete = date_diff(date_create($dateEmbauche), date_create($aujourdhui));
        $ancienete =  $callAncienete->format('%y');
        return $ancienete;
    }
//Ajouter à la classe la méthode augmentationDuSalaire( ) qui augmente le 
//     salaire de l’employé en prenant en considération l’ancienneté.
    public function augmentationDuSalaire():void{
//Si Ancienneté < 5 ans, alors on ajoute 2%. -
// Si Ancienneté < 10 ans, alors on ajoute 5%. -
//      Sinon, on ajoute 10%.
        $diff = $this->anciennete();
        if ($diff<5) {
            $this->salaire = $this->salaire * 1.02;
        }elseif ($diff<10 and $diff >=5) {
            $this->salaire = $this->salaire * 1.05;
        }elseif ($diff >=10) {
            $this->salaire = $this->salaire * 1.10;
        }
//jouter la méthode AfficherEmployé() qui affiche les informations de l’employé comme suit :
    }
    public function afficherEmploye():void{

        //- Matricule : […]
                // - Nom complet : [NOM Prénom]
                // - Age : […]
                // - Ancienneté : […]
                // - Salaire : […]
        $matricule = $this->matricule;
        $nom = strtoupper($this->nom);
        $prenom = ucfirst($this->prenom);
        $age = $this->age();
        $anciennetee = $this->anciennete();
        $salaire = $this->salaire;
        echo "-> Matricule : [$matricule]"."\n"."-> Nom complet : [$nom $prenom]"."\n".
        "-> Age : [$age]"."\n"."-> Anciennetée : [$anciennetee]"."\n"."-> Salaire : [$salaire]";
        
    }
    

//Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe.
    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

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
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get the value of dateEmbauche
     */ 
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */ 
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }
}



?>