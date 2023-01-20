<?php
/* -quelles seront les valeurs des variables A, B et C apres execution des instructions suivantes ?
var A,B,C : entier 
debut
A<-3      A=3  B=?  C=?
B<-10     A=3  B=10 C=?
C<-A+B    A=3  B=10 C=13
B<-A+B    A=3  B=13 C=13
A<-C      A=13 B=13 C=13
fin
*/

//affectation valeur
$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;

//afichage
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