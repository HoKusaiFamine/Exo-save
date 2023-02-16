<?php

/*

écrire une fonction nommée `message` qui :

- prend un paramètre de type chaîne de caractère
- renvoit le paramètre en y ajoutant un saut de ligne

appeler cette fonction en lui passant un paramètre ayant la valeur `'Php 5.6'` et afficher le résultat dans la console

*/
echo 'Debut'."\n";
//creation de la fonction
function message($mess):  string {
    Return  'la valeur du parametre est de : '. $mess."\n";
}
//affectation parametre
$mess =  5.6;
//appel et affiche la fonction
echo message($mess);
echo 'Fin';
?>