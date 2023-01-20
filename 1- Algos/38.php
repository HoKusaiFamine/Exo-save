<?php
/* - ecrivez un algorithme permettant, toujours sur le meme prencipe,
    a l'utilisateur de saisir un nombre determine de valeur.
    le programme, une fois la saisie terminee, renvoie la plus grande
    valeur en precisant quelle position elle occupe dans le tableau.
    on prendra soin d 'effectuer la saisie dans un premier temps,
    et la recherche de la plus grande valeur du tableau dans un second temps.
*/
$nbrmax = 0;
$pos = 0;
echo 'Debut';
echo "\n";
$tab = array ();
$totalValeur = readline ('entrez le nombre de valeur : ');
//remplissage tableau
for ($i=0; $i < $totalValeur ; $i++) { 
    $tab[$i] = readline(' entrez la valeur ' . ($i+1). ' : ');
    $nb = $tab[$i];
    // trouver le numeros max comparant tab[i] et nbrmax
    if ($nb>$nbrmax) {
        $nbrmax = $nb;  
        $pos = $i  ;  
        }
    }
echo 'nombre le plus grand est : ' . "$nbrmax" . "\n";
echo 'placer en position : '.$pos ;
echo "\n";
echo 'Fin';
?>