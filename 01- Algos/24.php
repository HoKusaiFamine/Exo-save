<?php
/* -les habitants de paris paient l'impot selon les regles suivantes: 
    -les hommes de plus de 20 ans paient l'impot
    -les femmes paient l'impot si elle ont entre 18 et 35 ans
    -les autres ne paient pas d'impot
le programme demandera donc l'age et le sexe du parisien,
et se prononcera donc ensuite sur le fait que l'habitant est imposable ou non.
*/
echo 'Debut';
echo "\n";
//demande age et le sex
$age = readline('entrez votre age :');
$sex = readline('entrez votre sexe H/F :');
//selectionner les homme ou le femme qui rentre dans le cadre et paye des impot sinon il n en paye pas
if ($age>20 and $sex == 'H' or $age>20 and $sex == 'h' ) {
    echo 'Mr vous etes imposable';
    }else   {
    if (($age>17 and $age<36) and $sex == 'F' or ($age>17 and $age<36) and $sex == 'f' ) {
        echo 'Mde vous etes imposable';
            }else {
            echo 'vous etes tranquille niveau impot';
            }
    }
echo "\n";
echo 'Fin';
?>