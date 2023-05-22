<?php

/*

écrire une fonction nommée `soustraction` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de la soustraction des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `3` et `2`
afficher le résultat dans la console

*/

echo 'Debut'."\n";
//creation de la fonction(parametre): entier
function soustraction(int $nb1, int $nb2):  int {
    $somme = $nb1 - $nb2;
    return $somme;
        //ou : return $nb1 - $nb2;
}

//affectation parametre
$nb1 = 3;
$nb2 = 2;
//appel et affiche la fonction
echo 'la soustraction des deux nombre est egale a : '.soustraction($nb1,$nb2);

echo "\n".'Fin';
?>