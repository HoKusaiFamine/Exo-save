<?php
/* ecrire un algorithme qui demande un nombre de depart, et qui calcul sa factorielle.
*/

echo 'Debut';
echo "\n";
$nb = readline ('entrez un nombre pour avoir son factorielle  :');
{ 
    $f = 1; 
    //boucle avec conpteur chaque tour total mutiplier par emplacement
    for ($i = 1; $i <= $nb; $i++){ 
      $f = $f * $i; 
    }    
   } 
  echo "La factorielle de $nb est $f";
  echo "\n";
  echo 'Fin';
?>