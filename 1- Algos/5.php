<?php
/* -quelles seront les valeurs des variables A et B apres execution des instructions suivantes ?
var A,B : entier
debut
A<-5   A=5 B=? 
B<-2   A=5 B=2
A<-B   A=2 B=2
B<-A   A=2 B=2
*/

$a = 5;
$b = 2;
$a = $b;
$b = $a;
echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo 'fin'
?>