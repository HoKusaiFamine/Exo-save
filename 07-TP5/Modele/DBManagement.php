<?php
function readFileToArray(string $filesPath) : array {
    $listStag= file($filesPath,FILE_IGNORE_NEW_LINES); 
    return $listStag;
}
function generateStagPlaces(array $listStag, array $listPlaces): array {
    $listStagPlaces = array_combine($listStag,$listPlaces);
    return $listStagPlaces;
}
function generateTableau(array $listStagPlaces) : array  {

    $tableauMulti = [];
    $listStagPlaces = preg_replace('/\s+/',',',$listStagPlaces);
    foreach ($listStagPlaces as $key => $value) {
        $line = $value.','.$key;
        $tableauMulti[] = explode(",",$line);        
    }
    return $tableauMulti;
}
function placeStageRotate(string $listPlaceStag) : array{
    if (file_exists("./Save_Backup\Backup.json") ) {
        $listPlaceStag = "./Save_Backup\Backup.json";
    }
    $json = file_get_contents($listPlaceStag);
    $listStagPlaces = json_decode($json, true);
    $key = array_keys($listStagPlaces);
    $value = array_values($listStagPlaces);
    $value_last = array_pop($value);
    array_unshift($value,$value_last);
    $listStagPlaces = array_combine($key,$value);
    $json = json_encode($listStagPlaces, true);
    file_put_contents("./Save_Backup/Backup.json",$json); 
    return $listStagPlaces;  
}

function randomizePlacesStag ( array $listStagPlace) : array {
    $temp = array();
    $temp = array_values($listStagPlace);
    shuffle($temp);
    $new = array_combine(array_keys($listStagPlace), $temp);
    return $new;

}

function insertStagiaires(array $listStagPlaces): bool
{
    //Chaine de connexion à la base de donnée
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    for ($i = 0; $i < count($listStagPlaces); $i++) {
        $sql = "INSERT INTO stagiaire (nom, prenom, place) VALUES (?,?,?)";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute($listStagPlaces[$i]);
    }
    return $status;

}


function selectStagiaire(): array
{
    $host = 'localhost';
    $dbname = 'dwwm_2023';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // récupérer tous les utilisateurs
    $sql = "SELECT * FROM stagiaire";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}

function updateStagiaire(): bool
{
    $host = 'localhost';
    $dbname = 'dwwm_2023';
    $username = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";
    // modification des données
    $nom = $_POST['NOM'];
    $prenom = $_POST['PRENOM'];
    $id = $_POST['ID'];
    $sql = "UPDATE stagiaire SET NOM='$nom', PRENOM='$prenom' WHERE ID='$id'";
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->prepare($sql);
    $update = $stmt->execute();
    return $update;
}
function deleteStagiaire($liste): bool
{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    foreach ($liste as $id) {
        $sql = "DELETE FROM stagiaire WHERE ID='$id'";
        $stmt = $bdd->prepare($sql);
        $status = $stmt->execute();
    }
    
    return $status;
}
function deleteAllStagiaire(): bool{
    $bdd = new PDO('mysql:host=localhost;dbname=dwwm_2023;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $status = false;
    $sql = "DELETE FROM stagiaire";
    $stmt = $bdd->prepare($sql);
    $status = $stmt->execute();
    return $status;
}
?>