<?php
include_once "../Modele/Compte.class.php";
include_once "../Modele/Client.class.php";

echo "Compte 1 "."\n";
//initialisation valeur compte 1
$cin = readline("Donner le cin : ");
$nom = readline("Donner le nom : ");
$prenom = readline("Donner le prenom : ");
$tel = readline("Donner le numeros de tel : ");

echo "Détails du compte : "."\n"."***********************"."\n";
//creation du compte n1
$detail = new Compte($cin,$nom,$prenom,$tel);
//
//$detailClient = $detail->get_proprietaire();
$detail->afficherCompte();
echo "\n"."***********************"."\n";
//demander la somme a crediter envoyer le resultat dans la methode crediter 
$sommeCrediter = readline("Donner le montant à déposer: ");
$detail->crediter($sommeCrediter);

echo "\n"."***********************"."\n";
//afficher compte 1 
$detail->afficherCompte();
echo "\n"."***********************"."\n";
//demander la somme a debiter et l envoyer dans la methode debiter
$sommeDebiter = readline("Donner le montant à débiter: ");
$detail->debiter($sommeDebiter);
echo "\n"."***********************"."\n";
//puis reafficher nouveau resultat avec la meme methode
$detail->afficherCompte();

echo "\n"."***********************"."\n";
echo "Compte 2 :"."\n";
//initialisation valeur compte 2
$cin = readline("Donner le cin : ");
$nom = readline("Donner le nom :");
$prenom = readline("Donner le prenom :");
$tel = readline("Donner le numeros de tel :");
echo "Détails du compte : "."\n"."***********************"."\n";
//creation du compte 2
$detail2 = new Compte($cin,$nom,$prenom,$tel);
//et affichage compte 2
echo $detail2->afficherCompte();
echo "\n***********************\n";
//prendre valeur et crediter compte 2 avec compte 1
echo "Créditer le compte 2 à partir du compte 1\n";
$crediter = readline("Donnez le montant à déposer : ");
$detail->crediterCompte($crediter,$detail2);

echo "Debiter le compte 1 et crediter le compte 2\n";
$debiter = readline("Donnez le montant à déposer : ");
$detail2->debiterCompte($debiter,$detail);
echo "\n***********************\n";
$detail->afficherCompte();
echo "\n***********************\n";
echo $detail2->afficherCompte();
//print_r($detail2);
//print_r($detail);
?>