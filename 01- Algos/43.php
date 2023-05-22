<?php
echo 'debut';
echo "\n";

// - ecrire un algorithme qui permet d'inverser un tableu 

$tab = array ();
//remplissage tableau
$tab [0] = 'D';
$tab [1] = 'E';
$tab [2] = 'C';
$tab [3] = 'A';
$tab [4] = 'L';
$tab [5] = 'A';
$tab [6] = 'G';
$tab [7] = 'E';
$tab [8] = 'm';
$tab [9] = 'a';
$tab [10] = 'x';
$tab [11] = 'i';
/* -inverser tableau
print_r(array_reverse($tab));
*/
//solution sans fonction lire tableau dans l autre sens
for ($i=sizeof($tab); $i >=0 ; $i--) { 
    echo $tab[$i].' ';
    }
echo "\n";
echo 'fin';
?>