<?php
/* ecrire un algorithme qui demande l'age d'un enfant a l'utilisateur.
ensuite,il l'informe de sa catégorie : 
    ."poussin" de 6 a 7 ans
    ."pupille" de 8 a 9 ans
    ."minime" de 10 a 11 ans
    ."cadet" apres 12 ans 
peut-on concevoir plusieur algorithme équivalents menant a ce resultat? reponse oui 
*/
echo 'Debut';
echo "\n";
//age candidat
$a = readline ('entrez l age du candidat :');
//selction des diferentes categorie sinon trop jeune
if ($a == 6 or $a == 7) {
    echo 'le joueur est un poussin';
    } else if ($a == 8 or $a == 9){
        echo 'le joueur est un pupille';
        } else if ($a == 10 or $a == 11)
            {echo 'le joueur est un minime';
                } else if ($a > 11)
                    {echo 'le joueur est un cadet';
                        } else {
                            echo 'Le joueur est trop jeune';
                        }   
echo "\n";
echo 'Fin';
?>