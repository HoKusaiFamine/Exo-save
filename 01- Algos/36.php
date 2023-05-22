<?php
/* - toujours a partir de deux tableau precedamement saisis,
ecrivez un algorithme qui calcule le schtroumpf des deux tableaux.
 pour calculer le schtroumf
il faut multiplier chaque element du tableau 1 par chaque element du tableau 2, et additionner le tout 
par ex si l'on a :
  Tableau 1  (2,5,8,4)
  Tableau 2  (6,7)
    les schtrumpf sera : 6*2+6*5+6*8+6*4+7*2+7*5+7*8+7*4=247
*/
echo 'Debut';
echo "\n";
//initialiosation total
$total = 0;
//creation tableau1
//$tab1 = array (2,5,8,4); ou
$tab1 = array ();
//remplissage tableau1
$tab1 [0] = 2 ;
$tab1 [1] = 5 ;
$tab1 [2] = 8 ;
$tab1 [3] = 4 ;
//creation tableau2
$tab2 = array ();
//remplissage tableau2
$tab2 [0] = 6 ;
$tab2 [1] = 7 ;
  //boucle dans boucle pour parcourir 1tableau * toute les valeur deuxieme tableau
    for ($i=0; $i < sizeof($tab1) ; $i++) {
        for ($j=0; $j< sizeof($tab2); $j++) { 
             $total = $tab1[$i]*$tab2[$j]+ $total;
        }
    }
echo $total;
echo "\n";
echo "\n";
echo 'Fin';
?>



