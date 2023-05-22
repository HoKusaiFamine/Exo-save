<?php
include "../modele/functions.php";
session_start();

$filesPath = $_FILES['file']['tmp_name'];
$tabo = readFileToArray( $filesPath);

$listPlaces=array("place_1","place_2","place_3","place_4","place_5","place_6","place_7","place_8",
"place_9","place_10","place_11","place_12","place_13","place_14","place_15","place_16");

$listStagPlaces= generateStagPlaces($listPlaces,$tabo);


$listPlaceStag=saveListStagToJson($listStagPlaces);
//print_r($listPlaceStag);

$affichage =  placeStageRotate("../controller/Save_Backup/Backup.json");


$_SESSION = NULL;
$_SESSION = placeStageRotate("../controller/Save_Backup/Backup1.json");

header('Location: ../view/affichage5.php');




?>