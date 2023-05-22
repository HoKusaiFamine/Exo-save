<?php
/* - ecrire un algorithme qui demande deux nombres a l'utulisateur et l'informe ensuite
 si leur produit est positif ou negatif (on laisse de coté le cas ou le nombre vaut zero)
 attention toutefois on ne doit pas calculer le produit des deux nombres.
*/
echo 'debut';
echo "\n";
$a = readline('entrez le 1er nombre :');
$b = readline('entrez le deuxieme nombre :');

// si a>0 et b>0  ou a<0 et B<0 = positif
if (($a>0 and $b>0) or ($a<0 and $b<0)) {
    echo "le produit est positif";
        //sinon negatif
    }   else {
            echo "le produit est negatif";
    }
echo "\n";
echo 'fin'
?>