<?php
//inclure le fichier Employe.class pour pouvoir interagir avec 
include_once('../Modele/Employe.class.php');
//on demande de rentrer les information de l employer par lutilisateur
$matricule = readline("Donner le Matricule ");
$nom = readline("Donner le Nom ");
$prenom = readline("Donner le Prenom ");
$dateNaissance = readline("Donner la date de naissance (JJ-MM-AAAA) :");
$dateEmbauche = readline("Donner la date d embauche (JJ-MM-AAAA) :");
$Salaire = readline("Donner le salaire ");

//on cree l 'objet employe avec les valeur de lutillisateur
$employe = new Employe ($matricule,$nom,$prenom,$dateNaissance,$dateEmbauche,$Salaire);

//on affiche  le contenu employe (objet)
$employe->afficherEmploye($employe);

//on pass le contenu de lobjet vers la methode pour agmenter le salaire suivant condition
$employe->augmentationDuSalaire();
echo "\n"."Aprés application de l'augmentation de salaire"."\n";

//on affiche a nouveau le contenu employe avec la meme methode avec les modification
$employe->afficherEmploye($employe);
?>