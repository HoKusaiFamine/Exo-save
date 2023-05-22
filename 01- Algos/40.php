<?php
/* - soit un tableau T a deux dimensions (12, 8) prealablement rempli de valeur numeriques.
    Ecrire un algorithme qui recherche la plus grande valeur au sein de ce tableau.
*/
//declaration du tableau pres rempli
echo 'Debut';
echo "\n";
$max = 0 ;
$nbrTab1;
$nbrTab2;
$f = 3;
$tab1 = array ();
$tab2 = array ();

 //algo simplifier 1er solution
 //creation tableau 2dimention
$tab = array(array(1,3,5,8,6,7,9,6,7,12,5,6), array(1,3,5,8,6,7,9,6,7,12,5,6),array(1,3,5,8,6,7,9,6,7,12,5,6),array(1,3,5,8,55,7,9,6,7,12,5,6),array(1,3,5,8,6,7,9,6,7,12,5,6),
array(1,3,5,8,6,7,9,6,7,12,5,6),array(1,3,5,8,6,7,9,6,7,12,5,6),array(1,3,5,8,6,7,9,6,7,12,5,6) );

for ($i=0; $i < sizeof($tab); $i++) { 
    for ($j=0; $j < sizeof($tab) ; $j++) { 
        if ($max< $tab[$i][$j] ) {
            $max = $tab [$i][$j] ;
        }     
    } 
}
/* exple
etablir des valeur ramdom a un tableau
for ($j=0; $j < $n ; $j++) { 
    $tab[$j] = random_int(10,20);
   }
*/
            /*2eme solution
            $nbrTab1 = readline ('entrez 1er valeur tableau 2 dimensions:');
            $nbrTab2 = readline ('entrez 2eme valeur tableau 2 dimensions:');

            for ($i=0; $i < $nbrTab1 ; $i++) { 
            $tab1[$i] = 3 + $f++ ;
            }
            for ($j=0; $j < $nbrTab2 ; $j++) { 
            $tab2[$j] = 8 + $i++  ;
            }         
            for ($i=0; $i < sizeof($tab1); $i++) { 
            for ($j=0; $j < sizeof($tab2) ; $j++) { 
                if ($max< $tab1[$i] ) {
                $max = $tab1 [$i] ;
                }
                if ($max< $tab2[$j]) {
                $max = $tab2[$j] ;
                }
                } 
            }
            */
echo 'la valeur max du tableau est de : '. $max;
echo "\n";
echo 'Fin';
?>

