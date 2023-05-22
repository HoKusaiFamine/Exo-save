<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../view/assets/css/style2.css">
    <title>Document</title>
</head>
    <header class = "logo">
    
    </header>
<body>

    <div class = "win">
    </div>

<div class = "taille">
<?php session_start();echo  $_SESSION['nom']." ".$_SESSION['prenom']. ' vous etes pas imposable';?>
</div>

</body>
</html>