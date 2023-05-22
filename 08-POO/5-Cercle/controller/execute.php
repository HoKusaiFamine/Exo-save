<?php
include_once "../modele/Cercle.class.php";
include_once "../modele/Point.class.php";


$abscisse = readline("Donner l'abscisse: ");
$ordonne = readline("Donner l'ordonne ");
$rayon = readline("Donner le rayon ");

 

$cercle = new Cercle($abscisse,$ordonne,$rayon);
$perimetre = $cercle->get_centre();
//echo $perimetre->norme();
echo $cercle->afficher();
echo"\n";



$perimetre = $cercle->getPerimetre();
echo $perimetre."\n";


$surface = $cercle->getSurface();
echo $surface."\n";


// echo "\n";
// $abscisse = readline("Donner l'abscisse: ");
// $ordonne = readline("Donner l'ordonne ");


$x = readline("Donner un point x: ");
$y = readline("Donner un point y: ");
//$r = readline("Donner son rayon: ");


$prout = new Point($x,$y);
$afficher = $prout->afficher ();
echo "\n";
echo $cercle->appartient($prout->getAbcisse(),$prout->getOrdonne());



?>