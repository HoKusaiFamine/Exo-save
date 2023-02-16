<?php
echo "Debut";
echo "\n";
include_once "../modele/Article.class.php";

$nbrArticle = readline("cb d'article ? : ");
//tva fixé pour tous les articles par l'utilisateur
$tauxTva = readline("Donner le taux de TVA pour tous les articles : ");
echo "Le taux TVA est : ".$tauxTva."%"."\n";
//boucle  le nombre d article
for ($i=1; $i < $nbrArticle+1 ; $i++) { 
    $article = "article $i" ;
    $reference = readline("Donner la référence de l'article ".$i." : ");
    $designation = readline("Donner la désignation de l'article ".$i." : ");
    $prixHt = readline("Donner le prix HT de l'article ".$i." : ");
    //si prixht non renseigner lui donner valeur
if ($prixHt < 0 or null) {
        $prixHt = 0;
}
    //ouvre la class Article
    $$article = new Article($reference,$designation);
    //recuper la valeur de taux tva et prix ht
    $$article->setTauxTva($tauxTva);
    $$article->setPrixHt($prixHt);

        echo"  ".$article."\n";
        //affichage grace a afficher article
    $$article->afficherArticle();

         echo "\n";

}
echo "Fin";
?>