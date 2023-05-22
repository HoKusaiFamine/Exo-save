<?php
/* - Ecrire un algorithme qui demande un nombre a l'utilisateur,
et l'informe ensuite si ce nombre est positif ou negatif
(on inclut cette fois le traitement du cas ou le nombre vaut zero).
*/
echo 'debut';
echo "\n";
$a = readline('entrez un nombre :');
//si a>0 = positif
if ($a>0) { 
    echo "le chiffre est positif";    
}
//si a<0 negatif
if ($a<0) { 
    echo "le chiffre est negatif";   
}
//si a=0 zero (un sinon est posible)
if ($a==0) {
    echo "le chiffre est egale zero";
}
echo "\n";
echo 'fin'
?>