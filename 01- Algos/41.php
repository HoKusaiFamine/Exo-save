<?php
/* Ecrire l'algorithme effectuant le decalage des elements d'un tablea 
        Tableau initial  D E C A L A G E
        Tableau final    E C A L A G E D 
*/
echo 'Debut';
echo "\n";
//initialisation de valeur la tempon
$temp = '0';
//creation tableaux
$tab = array ();
$tab2 = array ();
//remplissage tableau1
$tab [0] = 'D';
$tab [1] = 'E';
$tab [2] = 'C';
$tab [3] = 'A';
$tab [4] = 'L';
$tab [5] = 'A';
$tab [6] = 'G';
$tab [7] = 'E';
/*changement de place fastidieux 
    $temp = $tab[0];
    $tab[0] = $tab[1];
    $tab[1] = $tab[2];
    $tab[2] = $tab[3];
    $tab[3] = $tab[4];
    $tab[4] = $tab[5];
    $tab[5] = $tab[6];
    $tab[6] = $tab[7];
    $tab[7] = $temp ;
*/
//ou changement de place generique 
for ($i=0; $i < sizeof($tab); $i++) { 
    $tab2[$i] = $tab[$i+1];
        if ($i == sizeof($tab)-1 ) {
            $tab2[$i] = $tab[0] ;
        }
    }
//affichage tableau horizontalement
for ($i=0; $i < sizeof($tab2) ; $i++) {
    echo  $tab2[$i].' ' ;
    }
echo "\n";
echo 'Fin';
?>