<?php

include_once "../modele/Developpeur.class.php";
include_once "../modele/Manager.class.php";

//Deux étudiants.
$developpeur1 = new Developpeur("php", 240, "l'eponge", 'bob', "boby@gmail.com",065555,4000);
$developpeur2 = new Developpeur("sql", 241,"l'abeille", 'maya', "maya@gmail.Com", 07666, 5000);

$manager1 = new Manager("papaye", 640, "lamour", "juste" , "juste@gmail.com", 05222, 8000);
$manager2 = new Manager("mailing", 641, "flipo", "jeabaptiste" , "moi@gmail.com", 04777, 9000);



$manager1->affichage();
$manager2->affichage();
$developpeur1->affichage();
$developpeur2->affichage();
?>

