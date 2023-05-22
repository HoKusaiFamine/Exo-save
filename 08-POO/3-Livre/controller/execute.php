<?php

include_once "../modele/livre.class.php";

// demande d information livre 1 donner leur valeur au attribut
echo "Livre 1 : ";
echo "\n";
$titre = readline("donne le titre :");
$auteur = readline("donne l'auteur :");
$prix = readline("donne le prix :");

//appel de la methode affichage
$livre1 = new Livre($titre,$auteur,$prix);
$affiche = $livre1->afficher();
// a la ligne
echo "\n";
// demande d information livre 2
echo "Livre 2 : ";
echo "\n";
$titre = readline("donne le titre :");
$auteur = readline("donne l'auteur :");
$prix = readline("donne le prix :");
//appel de la methode affichage
$livre2 = new Livre($titre,$auteur,$prix);
$affiche = $livre2->afficher();
?>