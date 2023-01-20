<?php
/* - ecrire l'algorithme permettant d'imprimer le triangle suivant,
    1
    12
    123
    1234
    12345
    123456
    1234567
    le nombre de lignes etant donne par l'utilisateur :
*/
echo 'Debut';
echo "\n";
$nb = readline('entrez la grandeur du triangle :');
/* premier boucle etablir le nbr de ligne du triangle avec le nb donner par l'utilisateur
    et  s arrete automatiquement l'orsque nb est attend 
*/
for($i=0;$i<=$nb;$i++){
    // affichage en concatenisation en ajoutant a chaque tour une valeur
    for($j=1;$j<=$i;$j++){ 
    //afiche a chaque tour le resultat 
    echo $j;     
    }
    echo "\n";
    }
    echo 'Fin';
    ?> 