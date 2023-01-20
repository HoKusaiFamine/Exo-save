<?php
/* -reecrire l'algorithme precedent,
mais cette fois-ci on ne connait pas d'avance combien d'utilisateur souhaite saisir de nombre.
la saisie des nombres s'arrete lorsque l'utilisateur entre zero.
*/
echo 'Debut';
echo "\n";
//metre les valeur a zero
$nbrmax = 0 ;
$pos = 0;
$i = 0;
$nb = -5;
// tant que l'utilisateur entre pas 0 on boucle pour demander des nombres
while ($nb != '0') {
    $i++;
    $nb = readline ('entrez des nbr pour avoir le plus grand : (0/sortir) :');
//comparer a chaque tour si la nouvelle entrer et plus grande si oui enregistrer
        if ($nb>$nbrmax) {
            $nbrmax = $nb;  
            $pos = $i;  
            }
        }
//afficher le chiffre le plus grand       
echo $nbrmax;
echo "\n";
//afficher la position de celui ci
echo $pos;
echo "\n";
echo 'Fin';
?>
