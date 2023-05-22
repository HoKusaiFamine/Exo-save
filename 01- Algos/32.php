<?php
//ecrire un algorithme qui declare un tableau de 9 notes dont on fait ensuite saisir les valeur par l'utilisateur
echo 'Debut';
echo "\n";
//creation tableau
$tab = array ();
$nbrValeur = 9;

//remplissage tableau
for ($i=1; $i < $nbrValeur+1 ; $i++) { 
    $tab[$i] = readline('entrez la valeur ' . $i . ' : ');
}
//afficher le resultat horizontalement
for ($i=1; $i < $nbrValeur+1 ; $i++) { 
    echo $tab [$i].' ';
}
//afficher le resulatat verticalement
/*
echo $tab [0] ;
echo $tab [1] ;
echo $tab [2] ;
echo $tab [3] ;
echo $tab [4] ;
echo $tab [5] ;
echo $tab [6] ;
echo $tab [7] ;
echo $tab [8] ;
*/
echo "\n";
echo 'Fin';
?>
