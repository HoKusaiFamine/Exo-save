<?php

include_once "../modele/Etudiant.class.php";
include_once "../modele/Filiere.class.php";


$informatique = new Filiere ("info","informatique");
$communication = new Filiere ("tech","Techno de l'info et de communication");
$genie = new Filiere ( "gen","Génie civil");

//affichage des filiere
echo "\n La liste des filières de notre école : \n"
            .$informatique."\n"
            .$communication."\n"
            .$genie."\n";

//creation dun tableau pour les filiere
$filiere = array($informatique, $communication, $genie);

// $etudiant1 = new Etudiant("papa","charles","19-06-1984",$filiere1);
// $etudiant2 = new Etudiant("gfty","julien","19-05-1999",$filiere2);
// $etudiant3 = new Etudiant("mlkj","stephane","19-03-2001",$filiere1);
// $etudiant4 = new Etudiant("truc","david","19-06-1995",$filiere3);

$nombreEtudiants = readline( "Entrer le nombre d'étudiants: ");

//On rentre les étudiants manuelement 
for ($i=0; $i < $nombreEtudiants; $i++) { 
    $prenom = readline("Entrer le prenom: ");
    $nom = readline("Entrer le nom: ");
    $dateNaissance = readline("Entrer la date de naissance: ");
    $choix = readline("   Quelle filiere avez vous choisie ?       
    1 pour informatique,
    2 pour Techno de l info et de communication
    3 pour Génie civil: \n");

    if ($choix == 1) {
        $etudiant[$i] = new Etudiant($prenom, $nom, $dateNaissance, $informatique); 
    }elseif ($choix == 2) {
        $etudiant[$i] = new Etudiant($prenom, $nom, $dateNaissance, $communication); 
    }elseif ($choix == 3) {
        $etudiant[$i] = new Etudiant($prenom, $nom, $dateNaissance, $genie); 
    }
}


//On affiche les étudiants par filière en comparant le tableaux des filières et celui des étudiants

echo "\n Liste des étudiant par filière: \n";

for ($i=0; $i < 3; $i++) { 
    echo $filiere[$i]."\n";

    for ($j=0; $j < $nombreEtudiants; $j++) 
    {
        if ($etudiant[$j]->get__proprietaire() == $filiere[$i]) {
            echo $etudiant[$j];
        }
    }
}







?>