<?php
/* Ecrire un algorithme qui demande deux nombres à l'utilisateur,
et l'informe ensuite si ce nombre est positif ou négatif 
(on inclut cette fois le traitement du cas où le nombre vaut zéro).
Debut
    lire a 
    lire b 
    si a>0 et b>0 ou si a<0 et b<0
        ecrire le produit es positif
    sinon 
        ecrire le produit es negatif
    sinon 
        ecrire egale a zero
Fin
*/
echo 'debut';
echo "\n";
$a = readline('Entrez un nombre a : ');
$b = readline('Entrez un nombre b : ');
// trouver le negatif 
if (($a < 0 and $b < 0) or ($a < 0 xor $b < 0)){
    echo 'Le produit est negatif';
    }
    else {
        //trouver le positif
        if (($a > 0 and $b > 0) or ($a < 0 and $b < 0)){
        echo 'Le produit est positif';
        }
            //sinon zero
            else echo 'Le produit est egale a zero';
        }
echo "\n";
echo 'Fin';
?>

