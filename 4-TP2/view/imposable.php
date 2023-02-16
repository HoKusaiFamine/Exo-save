<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/assets/css/style.css">
    <title>Document</title>
</head>
    <header class = "logo">
    
    </header>
<body>
    <div class="img">
	    <h1><?php session_start(); echo  $_SESSION['nom']." ".$_SESSION['prenom']. ' vous etes imposable';?>
        </h1>
    </div>   
</body>
</html>