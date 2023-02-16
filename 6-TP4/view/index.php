<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <table>
    <form action= "../controller/execute.php" methode="get">
        <input type = "submit" value="envoyer">
    </form>
        <form action="../controller/execute2.php" method="get">
        <input type="submit" value="random tirage" />
        </form>
    </table>

    <div class="container">
    <div class="formulaire">   
    <form enctype="multipart/form-data" action="../Controller/execute3.php" method="post">
    <input class="file" name="file" type="file" /> 
    <div class="button">
    <input class="submit" name="submit" type="submit" value="valider" />
    </form>
    </div>
</body>
</html>