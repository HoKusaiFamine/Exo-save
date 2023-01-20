<?php
/* -quelles seront les valeurs des variables A et B apres execution des instructions suivantes ?
Var A,B : entier
debut 
A<-5      A=5 B=?
B<- A+4   A=5 B=9
A<- A+1   A=6 B=9
B<- A-4   A=6 B=2
*/
$a = 5;
$b = $a + 4;
$a = $a + 1;
$b = $a - 4;
echo 'debut';
echo "\n";
echo $a;
echo "\n";
echo $b;
echo "\n";
echo 'fin'
?>
