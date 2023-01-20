<?php
/* ecrire un algorithme qui demande un nombre de depart et qui ensuite affiche les dix nombres suivants. 
par exemple, si l'utilisateur entre le nombre 17, le programme affichera les nombres de 18 a 27.*/
echo 'Debut';
echo "\n";
//entrez un nombre
$nb = readline ('entrez un nombre pour avoir sa suite : ');
// creation d'un tableau demare du chiffre choisie+1 et stop a 10 de plus
for ($i= $nb ; $i < $nb + 10 ; $i++) { 
    echo $i + 1;
    echo "\n";
}
echo 'Fin';
?>