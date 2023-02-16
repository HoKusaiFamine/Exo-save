<?php


include "../modele/functions.php";
//session_start();

$nom = $_GET['nom'];
$_SESSION['nom']= $nom;

$prenom = $_GET['prenom'];
$_SESSION['prenom']= $prenom;

$dateNaiss = $_GET['date'];
$sexe = $_GET['sexe'];
$age = age($dateNaiss);
$renvoi = verifImpotParis( $age , $sexe);



$_SESSION ['nom'] = $nom;
if ($renvoi == true ) {
    header('Location: ../view/imposable.php');
    
}else {
    header('Location: ../view/nonImposable.php');
}


//print_r($_GET);
/*
print_r(verifImpotParis($age , $sexe));
print_r(age($dateNaiss));

//$impot = verifImpotParis($age , $sexe);

header('Location: ../view/affichage.php');


*/

?>