<?php
/* - donnez le resultat de la multiplication de deux nombre en ne faisant que des additions.
*/
echo 'Debut';
echo "\n";
//entrer les valeur 
$a = readline('entrez la 1er valeur :');
$b = readline('entrez la deuxieme valeur :');
$i = 0;
$total = 0;
// tan que i < b la boucle continue et additionne a chaque tour
for ($i=0; $i < $b; $i++) { 
    $total = $a + $total;
}
//si le dexieme chifre est negatif 
    if ($total == 0) {
        $c = $a;
        $a = $b;
        $b = $c;
            for ($i=0; $i < $b ; $i++) { 
                $total = $a + $total;
            }       
        }  
/*
autre solution possible sans posibilité dun $b negatif
while ($i<$b ) {
    // a chaque tour i prend 1 de plus
    $i++;
    // a chaque tour le total augmente valeur a + valeur t
    $t = $a + $t ;
}
*/
//affichage du total 
echo "$total";
echo "\n";
echo 'Fin';
?>
