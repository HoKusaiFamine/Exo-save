<?php
/* - ecrire un algotithme triant un tablea par
        -on cherche l'element de plus petit valeur dans le tableau
        -le placer en tete du tableau
        -recommencer avec le tableau moins la premiere case
*/
echo 'Debut';
echo "\n";
// Initialisation du tableau
    $tab = array(14,3,9,2,5,65,8,42,3,2,7);
    // Initialisation de la boucle qui va trié le tableau.
    for ($i=0; $i < sizeof($tab); $i++) { 
        $min = $i;
        for ($j=$i+1; $j < sizeof($tab); $j++) { 
            if ($tab[$j] < $tab[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $tab[$min];
            $tab[$min] = $tab[$i];
            $tab[$i] = $temp;
        }
    }
    // Affichage du tableau trier
    for ($i=0; $i < sizeof($tab); $i++) { 
        echo $tab[$i].' ';
    }
echo "\n";
echo 'Fin';
?>