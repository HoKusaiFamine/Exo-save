<?php

/*

écrire une fonction nommée `addition` qui :

- prend deux paramètres de type nombre entier
- renvoit le résultat de l'addition des deux paramètres

appeler cette fonction en lui passant les paramètres ayant la valeur `1` et `2` et afficher le résultat dans la console

*/

echo 'Debut'."\n";
//creation de la fonction(parametre): entier
function addition(int $nb1, int $nb2):  int {
    $somme = $nb1 + $nb2;
    return $somme;
}
//affectation parametre
$nb1 = 1;
$nb2 = 2;
//appel et affiche la fonction
echo 'la somme des deux nombre est egale a : '.addition($nb1,$nb2);

echo "\n".'Fin';
?>
