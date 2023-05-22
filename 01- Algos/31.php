<?php
/* ecrire un algorithme qui declare et remplisse un tableau contenant les six voyelle de l'alphabet latin
*/
echo 'Debut';
echo "\n";

//creation tableau
$tab = array ();
//remplissage tableau
$tab [0] = 'a';
$tab [1] = 'e';
$tab [2] = 'i';
$tab [3] = 'o';
$tab [4] = 'u';
$tab [5] = 'y';
//affichage tableau
echo $tab [0] ;
echo "\n";
echo $tab [1] ;
echo "\n";
echo $tab [2] ;
echo "\n";
echo $tab [3] ;
echo "\n";
echo $tab [4] ;
echo "\n";
echo $tab [5] ;
echo "\n";
//afficher horizontalement avec espace
/*for ($i=0; $i < 5 ; $i++) { 
    echo $tab[$i].' ';
}
*/
echo "\n";
echo 'Fin';
?>