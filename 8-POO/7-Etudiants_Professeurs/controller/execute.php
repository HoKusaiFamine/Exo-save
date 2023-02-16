<?php

include_once "../modele/Etudiant.class.php";
include_once "../modele/Employe.class.php";
include_once "../modele/Professeur.class.php";

//Deux étudiants.
$etudiant1 = new Etudiant(225, 240, "l'eponge", 'BOB');
$etudiant2 = new Etudiant(226, 241,"l'abeille", 'Maya');

//Deux employés.
$employe1 = new Employe(3000, 550, "gitoune", 'gege');
$employe2 = new Employe(2500, 551,"tartenpion", 'renald');

//Deux professeurs.
$professeur1 = new Professeur("math",5000, 712, "xavier", 'jey');
$professeur2 = new Professeur("geo",7000, 715,"maboulle", 'rick');

//afficher la liste des employe(nom prenom salaire)
echo "    La liste des employe : \n";
$employe1->__toString();
$employe2->__toString();
echo $employe1,"\n",$employe2;

////afficher la liste des etudiant (nom prenom n°cin)
echo "\n    La liste des etudiants : \n";
$etudiant1->__toString();
$etudiant2->__toString();
echo $etudiant1,"\n",$etudiant2;

//afficher la liste des professeur (nom prenom salaire specialite)
echo "\n    La liste des professeurs : \n";
$professeur1->__toString();
$professeur2->__toString();
echo $professeur1,"\n",$professeur2;


// $var = $etudiant;

// //var_dump($var);
// echo $this->$var($i);
// //var_dump($etudiant);

?>