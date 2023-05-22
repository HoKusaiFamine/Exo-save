<?php
/* - ecrire un algorithme permettant d'echanger les valeurs de deux variables A et B.
*/

/* besoin d'une variable tempon   a = 1 & a = 5
    a = 1         a=1 b=? temp=?
    b = 5         a=1 b=5 temp=?
    temp <- a     a=1 b=5 temp=1
    a <- b        a=5 b=5 temp=1
    b <- temp     a=5 b=1 temp=1
*/
//affectation variable
echo 'debut';
echo "\n";
$c = 0;
$a = 1;
$b = 5;
$c = $a;
$a = $b;
$b = $c;

echo $a;
echo "\n";
echo $b;
echo "\n";
echo 'fin'
?>