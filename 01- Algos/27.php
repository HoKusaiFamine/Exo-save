<?php
/* - ecrire un algorithme qui permet de donner le resultat d'un etudiant a un module
sachant que ce module est sanctionné par une note d'oral de coefficient 1 et un note d'ecrit coefficient 2.
la moyenne obtenu doit etre superieur ou egale a 10 pour valider le module
*/
echo 'Debut';
echo "\n";
$a = readline('entrez la note oral coef1 :');
$b = readline('entrez la note ecrit coef2 :');

// addition des note oral + ecrit * 2 (coef2)
$sum = $a + $b +$b;
// diviser par le nombre total de coef
$frequency = 3;
// calcul de la moyenne
$average = $sum/$frequency;
// resultat si la moyenne au dessus de 10 afficher recu
if ($average>=10) {
    echo 'vous etes recu';
    //sinon pas recu
    } else {
        echo 'nop';
    }
echo "\n";
echo $average;
echo "\n";
echo 'Fin';
?>