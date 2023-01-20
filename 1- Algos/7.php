<?php
/* - on dispose de trois variables A,B et C. Ecriver un algorithme 
tranferant a B la valeur de A, a C la valeur de B et A la valeur de C.
*/
/*  tempon = 0          temp = 0 a=? b=? c=?
    a = 3               temp = 0 a=3 b=? c=?
    b = 5               temp = 0 a=3 b=5 c=?
    c = 8               temp = 0 a=3 b=5 c=8
    tempon <- b         temp = 5 a=3 b=5 c=8
    b <- a              temp = 5 a=3 b=3 c=8
    a <- c              temp = 5 a=8 b=3 c=8
    c <- tempon         temp = 5 a=8 b=3 c=5
*/
echo 'debut';
echo "\n";
$d = 0;
$a = 3;
$b = 5;
$c = 8;

$d = $b;
$b = $a;
$a = $c;
$c = $d;
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo 'fin'
?>