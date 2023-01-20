<?php
/*  ecrivez un algorithme calculant la somme des valeurs d'un tableau 
    (on suppose que le tableau a ete prealablement saisi)
*/
echo 'Debut';
echo "\n";
//initialiser le tatal a zero
$total = 0 ; 
//creation tableau
$tab = array ();
//remplissage tableau
$tab [0] = 4 ;
$tab [1] = 5 ;
$tab [2] = 6 ;
$tab [3] = 7 ;
$tab [4] = 8 ;
$tab [5] = 9 ;
//incrementation de total
for ($i=0; $i < 5 ; $i++) { 
    $total = $tab[$i] + $total;
}
//affichage du total
echo 'le total est : '. $total;
echo "\n";
echo 'Fin';
?>