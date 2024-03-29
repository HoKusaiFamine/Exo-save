<?php

/*

traduire le bloc conditionnel `if` en bloc conditionnel `switch`

résultat attendu :
$variable a la valeur NULL
$variable est un objet
$variable est une chaîne de caractères
$variable est un nombre à virgule flottante
$variable est un nombre entier

*/
echo 'Debut'."\n";
$liste = array(null, new stdClass(), 'cours de php', 4.2, 42);

for ($i = 0; $i < count($liste); $i++) {

    $variable = $liste[$i];

    switch (true) {
        case (is_int($variable)) :
            echo '$variable est un nombre entier'."\n";
            break;
        case (is_string($variable)) :
            echo '$variable est une chaîne de caractères'."\n";
            break;
        case (is_float($variable)) :
            echo '$variable est un nombre à virgule flottante'."\n";
            break;
        case (is_object($variable)) :
            echo '$variable est un objet'."\n";
            break; 
        default:
            echo '$variable a la valeur NULL';
            break;
    }
}

/*
    if (is_null($variable)) {
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
    } else if (is_object($variable)) {
        echo '$variable est un objet';
        echo PHP_EOL;
    } else if (is_string($variable)) {
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
    } else if (is_float($variable)) {
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
    } else if (is_int($variable)) {
        echo '$variable est un nombre entier';
        echo PHP_EOL;
    }

}
*/
echo 'Fin';
?>