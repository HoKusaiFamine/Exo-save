<?php
/* - ecrire un algotithme triant un tablea par
        -on cherche l'element de plus petit valeur dans le tableau
        -le placer en tete du tableau
        -recommencer avec le tableau moins la premiere case
*/
        //replisage tableau
        $tab = array (6,7,22,4,3);
      /*remplissage tableau
        $tab [0] = '6';
        $tab [1] = '7';
        $tab [2] = '22';
        $tab [3] = '4';
        $tab [4] = '15';
      */
echo 'Debut';
$temp = 10000;
  for ($i=0; $i < sizeof($tab) ; $i++)  { 
      if ($temp>$tab[$i]) {
        $temp = $tab[$i];
        $tab[$i]= $tab[0];
        $tab[0]= $temp;      
      }
  }
$temp = 10000;
  for ($i=1; $i < sizeof($tab) ; $i++)  { 
      if ($temp>$tab[$i]) {
        $temp = $tab[$i];
        $tab[$i]= $tab[1];
        $tab[1]= $temp;
      } 
  }
$temp = 10000;
  for ($i=2; $i < sizeof($tab) ; $i++)  { 
      if ($temp>$tab[$i]) {
        $temp = $tab[$i];
        $tab[$i]= $tab[2];
        $tab[2]= $temp;
  } 
}
$temp = 10000;
for ($i=3; $i < sizeof($tab) ; $i++)  { 
      if ($temp>$tab[$i]) {
        $temp = $tab[$i];
        $tab[$i]= $tab[3];
        $tab[3]= $temp;
  } 
}
$temp = 10000;
for ($i=4; $i < sizeof($tab) ; $i++)  { 
    if ($temp>$tab[$i]) {
        $temp = $tab[$i];
        $tab[$i]= $tab[4];
        $tab[4]= $temp;
  } 
}
echo "\n";
for ($i=0; $i < sizeof($tab); $i++) { 
  echo $tab[$i].' ';
}
echo "\n";
echo 'Fin';
?>
