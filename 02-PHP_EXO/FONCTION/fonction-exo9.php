<?php

/*

écrire une fonction nommée `a_plus_grand_b` qui :

- prend un paramètre nommé `$a`
- prend un paramètre nommé `$b`
- renvoit `false` si le paramètre `$a` n'est pas un nombre entier
- renvoit `false` si le paramètre `$b` n'est pas un nombre entier
- renvoit `1` si `$a` est plus grand que `$b`
- renvoit `-1` si `$a` est plus petit que `$b`
- renvoit `0` si `$a` et `$b` sont égaux
*/
echo 'Debut'."\n";
//creation de la fonction (parametre)
function a_plus_grand_b( $a , $b):  string {
    if ( !is_int($a) or !is_int($b) ) {
        return 'false';
    }
    elseif ($a > $b){
           return '1' ;
    }  
    elseif ($a < $b) {
        return '-1' ; 
    }     
    else {
        return '0';
    }
    }

/* *=test
$a= 2;
$b = 3;

$r = a_plus_grand_b( $a , $b);
var_dump ($r);
*/
/*
appeler la fonction avec les paramètres `10` et `5`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`
*/
$r = a_plus_grand_b( 10 , 5);
var_dump ($r);

/*
appeler la fonction avec les paramètres `2` et `8`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`
*/
$r = a_plus_grand_b( 2 , 8);
var_dump ($r);

/*
appeler la fonction avec les paramètres `7` et `7`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`
*/
$r = a_plus_grand_b( 7 , 7);
var_dump ($r);

/*
appeler la fonction avec les paramètres `'foo'` et `5`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`
*/
$r = a_plus_grand_b( 'foo' , 5);
var_dump ($r);

/*
appeler la fonction avec les paramètres `10` et `'bar'`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`
*/
$r = a_plus_grand_b( 10 , 'bar');
var_dump ($r);

/*
appeler la fonction avec les paramètres `'foo'` et `'bar'`
stocker le résultat dans une variable nommée `$resultat`
afficher le contenu de la variable `$resultat` avec la fonction `var_dump`
*/
$r = a_plus_grand_b( 'foo' , 'bar');
var_dump ($r);

echo 'Fin';
?>
