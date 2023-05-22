<?php
include_once "../modele/Rectangle.class.php";

    //demander la longeur et la largeur
$longueur = readline("donne la longeur :");
$largeur = readline("donne la largeur :");
    //appeler la class rectangle pour trouver l atribut taille
$taille = new Rectangle($longueur,$largeur);
    //et le passer dans la methode perimetre 
$perimetre = $taille->perimetre();
echo $perimetre;
echo "\n";
    //et le passer dans la methode air puis affichafe
$aire = $taille->aire();
echo $aire;
echo "\n";
    //et le passer dans la methode est carre ou non bool?
$carre = $taille->estCarre();
    //resultat pass pour deux affichage possible
    if ($carre == true) {
        echo "ceci est un carre";
    }else {
        echo "ce n'est pas un carre";
    }
    echo "\n";echo "\n";

    //affichage rectangle 2
echo "Rectangle 2";
echo "\n";
echo "\n";
//demander la longeur et la largeur rectagle 2
$longueur = readline("donner la longeur du rectangle 2 :");
$largeur = readline("donner la largeur du rectangle 2 :");
//appel de la class rectagle avec les atribut longueur largeur
$carre2 = new Rectangle($longueur,$largeur);
//calcul des differente demande en passant chacune par sa methode 
$perimetre = $carre2->perimetre();
$aire = $carre2->aire();
$carre = $carre2->estCarre();
//pass dans la methode d affichage
$resul = $carre2->afficherRectangle();
echo $resul;
echo "\n";

?>