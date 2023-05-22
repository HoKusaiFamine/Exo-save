<?php
/* - ecrire un algorithme qui calcule le nombre d'entiers pairs et le nombre
d'entier impaires d'un tableau d'entiers.
*/
echo 'Debut';
echo "\n";
$pair = 0;
$impaire = 0;

$gTableau = readline (' cb d entrez sur le tableau ? : ');
//remplire un tableau aleatoire
for ($i=0; $i < $gTableau ; $i++) { 
    $tab[$i] = random_int(10,20);
        //si le chiffre divise par deux et un entier alor il est positif   
        if ( $tab[$i]%2 == 0) {
            $pair = $pair +1;
                //sinon il est impaire
                } else {
                    $impaire = $impaire +1;
                }
            }
//afficher valeur tableau
for ($i=0; $i < sizeof($tab); $i++) { 
    echo $tab[$i].' ';
    } 
echo "\n";
echo 'il y a : '. $pair. ' nombre paire'."\n".'&'."\n";
echo 'il y a : '. $impaire. ' nombre impaire';
echo "\n";
echo 'Fin';
?>