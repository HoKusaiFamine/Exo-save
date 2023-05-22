<?php
/* - ecrire un algorithme qui demande un nombre a l'utulisateur et l'informe ensuite
 si ce nombre est positif ou negatif (on laisse de coté le cas ou le nombre vaut zero)
*/
echo 'debut';
echo "\n";

$a = readline('entrez un nombre :');
//si le chifre > 0 donc il est positif
if ($a>0) { 
    echo "le chiffre est positif";
    # code...
}
//si le chifre < 0 donc il est negatif  (un else est possible)
if ($a<0) { 
    echo "le chiffre est negatif";
    # code...
}
echo "\n";
echo 'fin'
?>