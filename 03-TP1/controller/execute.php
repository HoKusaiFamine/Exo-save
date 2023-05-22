<?php
include "../modele/functions.php";
/*
echo  modeleFunction("moussa");
header('Location: ../view/affichage.php');
*/

// Execute f1
$listStag = ReadFileToArray('../modele/listStag.txt');

// Rentre en dur le tab pour les places
$listPlaces=array("place_1","place_2","place_3","place_4","place_5","place_6","place_7","place_8","place_9","place_10","place_11","place_12","place_13","place_14","place_15","place_16");

// Execute f2
$listStagPlaces= generateStagPlaces($listPlaces,$listStag);

// Execute f3
$listPlaceStag=saveListStagToJson($listStagPlaces);

// function randomizePlacesStag(array $listStagPlaces): array;

// Execute f4

$affichage = placeStageRotate($listPlaceStag);

    foreach ($affichage as $key => $value) {
        echo  $key." => " .$value." | ";
    }
?>