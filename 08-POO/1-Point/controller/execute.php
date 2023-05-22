<?php
include_once "../modele/Point.class.php";
//demander l bascisse
$abscisse = readline("donne l abscisse :");

//demander l'ordonne
$ordonne = readline("donne l'ordonne :");

//ouverture de la methode point
$taille = new Point($abscisse,$ordonne);
//calcul de distance entre l’origine du repère et le point en cours.
$res = $taille->Norme();
//affichage resultat
echo "La norme du point (1,2) est : " .$res;




//$abscisse = 1;
//$ordonne = 2;


?>