<?php
/* - ecrivez un algorithme constituant un tableau, a partir de deux tableaux
    de meme longueur prealablement saisis. le nouveau tableau sera la somme
    des elements des deux tableaux de depart.
*/
echo 'Debut';
echo "\n";
$total = 0;
//creation tableau
$tab = array ();
//remplissage tableau
$tab [0] = 5 ;
$tab [1] = 5 ;
$tab [2] = 6 ;
$tab [3] = 7 ;
$tab [4] = 8 ;
$tab [5] = 5 ;
//creation tableau2
$tab2 = array ();
//remplissage tableau2
$tab2 [0] = 4 ;
$tab2 [1] = 5 ;
$tab2 [2] = 6 ;
$tab2 [3] = 7 ;
$tab2 [4] = 8 ;
$tab2 [5] = 9 ;
//remplisage tab3 addition tab[0]+tab2[0] ainsi de suite
for ($i=0; $i < sizeof($tab) ; $i++) { 
    $tab3[$i] = $tab[$i] + $tab2[$i];
    echo $tab3 [$i].' ';
}
echo "\n";
echo 'Fin';
?>