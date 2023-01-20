<?php
echo 'debut';
echo "\n";

// - ecrire un algorithme qui permet de suprimer un element donné d'un tableau d'entiers. 

$tab = array ();
//remplissage tableau
$tab [0] = 'D';
$tab [1] = 'E';
$tab [2] = 'C';
$tab [3] = 'A';
$tab [4] = 'L';
$tab [5] = 'A';
$tab [6] = 'G';
$tab [7] = 'E';
$tab [8] = 'm';
$tab [9] = 'a';
$tab [10] = 'x';
$tab [11] = 'i';
//affichage tableau 1 
for ($i=0; $i < sizeof($tab); $i++) { 
    echo $tab[$i].' ';
}
echo "\n";
//unset($tab[4]);
//choix du rend a suprimer
$valeurSup = readline ('entrez le rend a suprimer du tableau :');
//decaler i a partir de l index choisie
for ($i=$valeurSup; $i < sizeof($tab)-1; $i++) {
    $tab[$i] = $tab[$i+1];     
}
//suprimer le dernier index du tableau 
unset($tab[sizeof($tab)-1]);
//lire nouveau tableau
for ($i=0; $i < sizeof($tab); $i++) { 
    echo $tab[$i].' ';
}
echo "\n";
echo 'fin';
?>