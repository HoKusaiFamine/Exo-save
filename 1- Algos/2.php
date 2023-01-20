<?php
/* -quelles seront les valeurs des variables A,B,C apres execution des instructions suivantes ?
Var A,B,C: entier
debut 
A<-5      A=5 B=? C=?
B<-3      A=5 B=3 C=?
C<-A+B    A=5 B=3 C=8
A<-2      A=2 B=3 C=8
C<-B-A    A=2 B=3 C=1
*/

$a = 5;
$b = 3;
$c = $a - $b;
$a = 2;
$c = $b - $a;
echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo 'fin'
?>