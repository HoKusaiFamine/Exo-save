<?php
/* - ecrire un programme qui lit le prix HT d'un article, le nombre d'article et
 la taux de tva, et qui fournit, le prix total TTC correspondant.
  faire en sorte que des libellés apparaissent clairement.(TTC=NA*HT*(1+TVA)).
 */
echo 'debut';
echo "\n";
//demande prix,nbr article,tva a lutilisateur
 $ht = readline('entrez le prix HT de l article :');
 $na = readline('entrez le nombre d article :');
 $tva = readline('entrez la TVA  :');

//affichage et calcul du prix total
echo $tcc = ($na*$ht*(1+$tva/100));
echo "\n";

//affichage decomposé
echo $tcc." € TCC = (".$na." € (prix article) * ".$ht." (nbr d'article)) * "."(1+".$tva."% TVA )";

echo "\n";
echo 'fin'

 ?>
