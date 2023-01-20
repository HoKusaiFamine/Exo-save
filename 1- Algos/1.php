<?php
/* -quelles seront les valeurs des variable A et B apres execution des instructions suivantes ?
var A,B : entier 
debut 
A<-1      A=1 B=?
B<-A+3    A=1 B=4
A<-3      A=3 B=4
Fin
*/


echo 'Debut';
$a = 1;
$b = $a + 3;
$a = 3;
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo 'Fin';


?>