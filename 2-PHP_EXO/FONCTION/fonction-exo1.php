<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractères
- affiche le paramètre dans la console
- affiche un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'`

*/
echo 'Debut'."\n";
//creation de la fonction(parametre): void pour un affichage dans fonction
function message($mess):  void {
    echo 'le parametre a la valeur : '. $mess."\n";
}
//affectation parametre
$mess = 'php 5.6';
//appel et affiche la fonction
message($mess);
echo 'Fin';
?>
