<?php
include_once "../modele/Personne.class.php";
include_once "../modele/Profil.class.php";
include_once "../modele/Utilisateur.class.php";


$chefProjet = new Profil ("CP","Chef de prjet");
$manager = new Profil ("MN","Manager");
$directeurProjet = new Profil ("DP","Directeur de projet");
$directeurRH = new Profil("DRH","Directeur des ressources humaines");
$directeurG = new Profil("DG","Directeur général");


// $utilisateur = new Utilisateur("03251","1234","papier","shark","baby","rien@fair","0656548525","5000",$directeurRH);

// $utilisateur->affiche();

$nombreUtilisateur = readline("cb d'utilisateur ? ");

for ($i=0; $i < $nombreUtilisateur ; $i++) { 
    $login =  readline("donner votre login : ") ;
    $password = readline("donner votre mot de pass : ");
    $service = readline("de quel service : ");
    $nom = readline("quel est votre nom :");
    $prenom = readline("quel est votre prenom :");
    $mail = readline("quel est votre mail :");
    $telephone = readline("quel est votre telephone :");
    $salaire = readline("entrer votre salaire :");

    $choix = readline("quel est votre profil ? 
    1/Chef de prjet ,
    2/Manager ,
    3/Directeur de projet ,
    4/Directeur des ressources humaines ,
    5/Directeur général :
      choix :");


    if ($choix == 1) {
        $utilisateur[$i] = new Utilisateur($login,$password,$service,$nom,$prenom,$mail,$telephone,$salaire,$chefProjet);
    }elseif ($choix == 2){
        $utilisateur[$i] = new Utilisateur($login,$password,$service,$nom,$prenom,$mail,$telephone,$salaire,$manager);
    }elseif ($choix == 3){
        $utilisateur[$i] = new Utilisateur($login,$password,$service,$nom,$prenom,$mail,$telephone,$salaire,$directeurProjet);
    }elseif ($choix == 4){
        $utilisateur[$i] = new Utilisateur($login,$password,$service,$nom,$prenom,$mail,$telephone,$salaire,$directeurRH);
    }elseif ($choix == 5){
        $utilisateur[$i] = new Utilisateur($login,$password,$service,$nom,$prenom,$mail,$telephone,$salaire,$directeurG);
    }
}

echo "La liste des utilisateur \n";

for ($i=0; $i < $nombreUtilisateur; $i++) { 
    $utilisateur[$i]->affiche()."\n";
}


echo "La liste des Managers \n";

for ($i=0; $i < $nombreUtilisateur ; $i++) {
    $utilisateur[$i]->calclulerSalaire();
    if ($utilisateur[$i]->get_profil()->getCode() == "MN") {
        $utilisateur[$i]->affiche();
    }if ($utilisateur[$i]->get_profil()->getCode() == "DG") {
        $utilisateur[$i]->affiche();
    }
}


?>