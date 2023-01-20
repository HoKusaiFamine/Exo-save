<?php
/* ecrire un algorithme qui demande successivement 20 nombres a l 'utilisateur,
 et qui lui dit ensuite quel etait le plus grand parmi ces 20 nombre
*/
echo 'Debut';
echo "\n";
$nbrmax = 0 ;
//boucle qui demande a chaque tour le nouveau nbr 
for ($i=1; $i <= 20; $i++) { 
    $nb = readline ('entrez 20 nbr pour avoir le plus grand :');
        //compar a l ancien plus grand et lechange en cas de plus grand
        if ($nb>$nbrmax) {
        $nbrmax = $nb;
        }
    }
echo $nbrmax;
echo "\n";
echo 'Fin';
?>