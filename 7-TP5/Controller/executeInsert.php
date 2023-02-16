<?php
include "../modele/DBManagement.php";


$filesPath = $_FILES['file']['tmp_name'] ;
$listStag = readFileToArray($filesPath);
// Execute f1

$listStag = randomizePlacesStag ($listStag);
// Rentre en dur le tab pour les places
$listPlaces=array("place_1","place_2","place_3","place_4","place_5","place_6","place_7","place_8","place_9","place_10","place_11","place_12","place_13","place_14","place_15","place_16");


deleteAllStagiaire();
// Execute f2

$listStagPlaces = generateStagPlaces($listPlaces,$listStag);

//print_r($listStagPlaces);




$listStagPlaces = generateTableau( $listStagPlaces);

//var_dump($listStagPlaces);

$stagiaire = insertStagiaires($listStagPlaces);

header('Location: ../view/index.html');



?>
