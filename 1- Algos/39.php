<?php
/* - Toujours et encore sur le meme principe, ecrivez un algorithme permettant,
    a l' utilisateur de saisir les notes d'une classe.
    le programme, une fois la saisie terminée,
    renvoie le nombre de ces notes superieurs a la moyenne de la classe.
*/
echo 'debut';
echo "\n";

$tab = array ();
$nbrEleve = 0 ;
$totalNote = 0 ;
$moyenne = 0; 
$cont = 0;

$nbrEleve = readline ('entrez le nombre d eleve :');

//remplissage tabl avec note + un total de toute les notes
    for ($i=0; $i < $nbrEleve ; $i++) { 
        $tab[$i] = readline('entrez une valeur ' . ($i+1). ' : ') ; 
        $totalNote = $totalNote + $tab[$i];  
    }
//calcul moyenne
    $moyenne = $totalNote / $nbrEleve;

//extraire les notes sup a moyenne
    for ($i=0; $i < $nbrEleve ; $i++) { 
    # code...
        if ($tab[$i]> $moyenne) {
            $cont++ ;
        }
    }
//affichage moyenne et affichage nbr note au dessus de la moyenne
    echo "\n".'La moyenne est de : '.$moyenne;
    echo "\n";
    echo 'Il y a '.$cont.' notes au dessus de la moyenne';   
echo "\n";
echo 'fin';
?>

