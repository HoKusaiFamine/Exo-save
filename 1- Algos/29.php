<?php
/* - ecrire un algorithme qui demande un nombre, calcule et affiche la somme (sigma) 
*/
// saisir la valeur
$n = readline('entrez un nombre pour obtenir la somme (sigma) :');
$som = 0;

for ($i=0 ; $i <= $n; $i++) {
    // calcul de la somme des entiers
    $som = $i*$i*$i+$som;
    }
// ecrire le resultat
echo $som;
?>
