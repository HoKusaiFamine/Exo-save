<?php
/* ecrire un algorithme qui demande un nombre de depart,
et qui calcule la somme des entiers jusqu'a ce nombre.
par exemple, si l on entre 5, le programme doit calculer :
         1+2+3+4+5 = 15.
*/
echo 'Debut';
echo "\n";
$nb = readline ('entrez un nombre pour avoir la somme des entier de celui ci :');
//affectation somme a zero
$somme=0;
//faire une boucle de 1 au nbr choisie et additioner a chaque tour la somme
for ($i=1;$i<=$nb;$i++) {
    $somme=$somme+$i;
}
//aficher somme
echo "$somme";
echo "\n";
echo 'Fin';
?>