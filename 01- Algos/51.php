<?php
echo 'debut';
echo "\n";
/* - soit T un tableau de N reels. Ecrire un algorithme qui permet de calculer
 le nombre des occurrences d'un nombre X 
 (c'est-a-dire combien de fois ce nombre X figure dans le tableau T)
*/
$conteur = 0;
// Initialisation du tableau
$tab = array(array(1,3,5,8,6,7,9,6,7,12,5,6), array(1,3,5,8,6,7,9,6,7,12,5,6),
array(1,3,5,8,6,7,9,6,7,12,5,6),array(1,3,5,8,55,7,9,6,7,12,5,6),
array(1,3,5,8,6,7,9,6,7,12,5,6),array(1,3,5,8,6,7,9,6,7,12,5,6),
array(1,3,5,8,6,7,9,6,7,12,5,6),array(1,3,5,8,6,7,9,6,7,12,5,6) );

$cherche = readline (' chercher un nombre : ');
//comparer chaque colone de chaque ligne
for ($i=0; $i < sizeof($tab) ; $i++) { 
    for ($j=0; $j < sizeof($tab) ; $j++) { 
        //compteur+1 a chaque fois que sa match
        if ($cherche == $tab[$i][$j]) {
            $conteur = $conteur + 1 ;
        }
    }    
}
echo 'il y a : '. $conteur .' chiffre ' .$cherche .' dans le tableau';
echo "\n";
echo 'fin';
?>
