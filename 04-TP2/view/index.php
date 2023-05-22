<?php
// ce document html contient un formulaire avec un champ nommé `titre`
// dont les données sont envoyées par la méthode `get`
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>impotParis</title>
    <link rel="stylesheet" href="../view/assets/css/index.css">
</head>

    <header class = "logo">
    </header>

<body>

<div class = lineaire-simple>

<fieldset class = "center">
<legend>
    <p>Remplisser pour voir si vous etes imposable</p>
</legend>
<div class="formulaire">

    <form action="../controller/execute.php" method="get" >
        <label for="nom">nom</label>
        <input name="nom" type="text"/>
</br>
        <label for="prenom">prenom</label>
        <input name="prenom" type="text"/>
    </br>
        <legend>Select your genrer :</legend>
    <div>
        <input type="radio" name="sexe" value="Femme">
        <label for="Femme">F</label>
        <input type="radio" name="sexe" value="Homme">
        <label for="Homme">H</label>
    </div>
    </br>
        <label for="date">votre_date_naissance</label>
        <input name="date" type="date" />
    </br> 
    </br> 
        <input type="submit" value="envoyer" />
        </form>
</div> 
</fieldset>

    <div class = "img">
    </div>

   
    
</body>

</html>
