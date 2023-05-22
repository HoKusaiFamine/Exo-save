<?php

/*

écrire une fonction nommée `puissance` qui :

- prend un premier paramètres de type nombre entier
- prend un deuxième paramètres de type nombre entier ayant la valeur par défaut `2`
- élève le premier paramètre à la puissance du deuxième paramètre
- renvoit le résultat

appeler cette fonction en lui passant un seul paramètre ayant la valeur `2` et afficher le résultat dans la console
appeler cette fonction en lui passant les paramètres ayant la valeur `2` et `3` et afficher le résultat dans la console

*/

echo 'Debut'."\n";
//creation de la fonction(parametre): entier
function puissance(int $nb1,int $nb2 =2):  int {
    $puissance = $nb1 ** $nb2;
    return $puissance;      
}
//affectation parametre
//appel et affiche la fonction avec un seul parametre
$nb1 = 2;
echo puissance($nb1);
echo "\n";

//affectation parametre
$nb1 = 2;
$nb2 = 3;
//appel et affiche la fonction avec des valeur affecter
echo puissance ($nb1,$nb2);

echo "\n".'Fin';
?>
