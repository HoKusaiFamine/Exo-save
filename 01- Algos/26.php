<?php
/* - saisir 3 entier a, b et c et determiner dans r les racines de l'equation ax² + bx + c = 0
*/
echo 'Debut';
echo "\n";
echo 'resolution de l equation ax²+bx+c=0';
echo "\n";
//affectation valeur a,b,c
$a = readline ('entrez la valeur de a:');
$b = readline ('entrez la valeur de b:');
$c = readline ('entrez la valeur de c:');

$delta = ($b**2)-4*$a*$c;

if ($delta==0){
    $x1 = -$b/(2*$a);
    echo 'il y a une solution';
    echo $x1;
    }else if ($delta>0) {
        echo "il y a deux solution \n";
        echo (-$b + sqrt($delta))/(2*$a) ."\n";
        echo (-$b - sqrt($delta))/(2*$a);
            } else  {
                echo 'il ni a pas de soluition reelle';
    }
echo "\n";
echo 'Fin';
?>