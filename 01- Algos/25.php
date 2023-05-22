<?php
/* - ecrire un algorithme saisissant 2 variables entieres qui calcule et affiche leur moyenne.
*/
echo 'Debut';
echo "\n";
//saisie deux variable
$a = readline('entrez une variable :');
$b = readline('entrez une deuxieme variable :');
//calcul la moyenne 
$sum = $a + $b;
$frequency = 2;
$average = $sum/$frequency;
//afficher le resultat
echo 'la moyenne est de : '. $average;
echo "\n";
echo 'Fin';
?>