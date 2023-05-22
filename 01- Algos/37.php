<?php
/* - ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs.
Toutes doivent etre ensuite augmentées de 1 et le nouveau tableau sera affiche a l'ecran.
*/
echo 'Debut';
echo "\n";

//declaration  du tableau
$tab = array ();
//cration d'un tableau valeur i
$totalValeur = readline ('entrez le nombre de valeur : ');
//remplissage tab par utilisateur +1
for ($i=1; $i < $totalValeur+1 ; $i++) {
    $tab[$i] = readline('entrez la valeur ' . $i . ' : ') +1 ;
}
//affichage nouveau tableau
for ($i=1; $i < sizeof($tab)+1; $i++) {
    echo 'resutat valeur '.$i.' saisie +1 : '. $tab[$i].PHP_EOL ;
}
echo 'Fin';
?>