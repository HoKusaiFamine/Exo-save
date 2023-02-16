<?php
echo 'Debut'."\n";
/*
traduire le bloc conditionnel `if` en bloc conditionnel `switch`
*/

$carte_fidelite = true;
$demande = 4;

$places_normales = rand(0, 10);
$places_carte_fidelite = rand(0, 5);

echo "carte_fidelite: $carte_fidelite\n";
echo "demande: $demande\n";
echo "places_normales: $places_normales\n";
echo "places_carte_fidelite: $places_carte_fidelite\n";
/*
if (($carte_fidelite && $demande <= $places_carte_fidelite)
    || ($carte_fidelite && $demande <= $places_normales)
    || (!$carte_fidelite && $demande <= $places_normales)) {
    echo "la réservation est enregistrée\n";
} else {
    echo "il n'y a pas assez de places\n";
}
*/

switch ($carte_fidelite){
    case $carte_fidelite && $demande <= $places_carte_fidelite;
        print "la réservation est enregistrée";
        break;
    case $carte_fidelite && $demande <= $places_normales;
        print "la réservation est enregistrée";
        break;
    case !$carte_fidelite && $demande <= $places_normales;
        print "la réservation est enregistrée";
        break;
    default: 
        print "il n'y a pas assez de places";
        break;
}
echo "\n".'Fin';
?> 
