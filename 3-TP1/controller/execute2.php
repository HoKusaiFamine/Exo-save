<?php
//avoir en lien le fichier des fonction
include "../modele/functions.php";
session_start();
$_SESSION = NULL;
$_SESSION = placeStageRotate("../controller/Save_Backup/Backup1.json");

header('Location: ../view/affichage5.php');

?>