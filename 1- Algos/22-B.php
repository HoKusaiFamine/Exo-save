<?php
/* ecrire un algorithme qui demande successivement 20 nombres a l 'utilisateur, et qui lui dit ensuite quel etait le plus grand parmi ces 20 nombre
*/
echo 'Debut';
echo "\n";
$nbTour = 20;
$nbrmax = 0 ;
$pos = 0;
//boucle de 20fois pour rentrer les nombrs
for ($i=1; $i <= $nbTour; $i++) { 
    $nb = readline ('entrez '."$nbTour".' nbr pour avoir le plus grand :');
    //si le nombre et plus grand que le chiffre max enregistrer alors on l enregistre
        if ($nb>$nbrmax) {
            $nbrmax = $nb;
            $pos = $i;
            }
        }
//affichage du plus grand nombre
echo $nbrmax;
echo "\n";
//affichage de sa position
echo $pos;
echo "\n";
echo 'Fin';
?>