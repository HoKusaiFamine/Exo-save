<?php

/*

écrire une fonction nommée `adresse` qui :

- prend un paramètre nommé `$numero`
- prend un paramètre nommé `$rue`
- prend un paramètre nommé `$code_postal`
- prend un paramètre nommé `$ville`
- concatène (met bout à bout, chaîne) tous les paramètres en les séparant d'une virgule suivie d'un espace `', '`
- renvoit le paramètre

appelez cette fonction avec quatre paramètres de votre choix et affichez le résultat

*/

echo 'Debut'."\n";
//creation de la fonction(parametre): entier+text
function adresse(int $numero,string $rue, int $code_postal, string $ville):  string {
       $parametre = "$numero, $rue,  $code_postal,  $ville ";
       return $parametre;
        
}
//affectation parametre
$num = 18;
$habitation = 'rue armand barbes';
$postaux = 59000;
$secteur = 'Lille';

//appel et affiche la fonction
echo adresse($num,$habitation,$postaux,$secteur);
echo "\n".'Fin';
?>