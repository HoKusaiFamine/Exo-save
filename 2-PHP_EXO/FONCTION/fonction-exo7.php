<?php

/*

écrire une fonction nommée `ouiNon` qui :

- prend un paramètre de type booléen
- renvoit la chaîne de caractères `'oui'` quand le paramètre a la valeur `true`
- renvoit la chaîne de caractères `'non'` quand le paramètre a la valeur `false`

appeler cette fonction en lui passant un paramètre ayant la valeur 
    `true` et afficher le résultat de la fonction dans la console
appeler cette fonction en lui passant un paramètre ayant la valeur 
    `false` et afficher le résultat de la fonction dans la console

*/
echo 'Debut'."\n";
//creation de la fonction(parametre): void pour un affichage dans fonction
function ouiNon($boll):  void {

    if ($boll == true ) {
        echo  'la valeur est oui' ;       
    } else {
        echo 'la valeur est Non' ;
    }
}
//affichage de la fonction deux fois suivant le resultat 
ouiNon (true);
echo "\n";
ouiNon (false);

echo "\n".'Fin';
?>