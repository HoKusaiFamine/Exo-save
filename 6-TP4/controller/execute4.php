<?php
include "../modele/functions.php";
session_start();

generateCsv( '../controller/Save_Backup/Backup.json');

$file = '../controller/csv/Extraction_stagiare.csv';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}

header('Location: ../view/affichage5.php')

?>