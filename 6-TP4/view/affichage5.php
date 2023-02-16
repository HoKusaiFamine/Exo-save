<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <?php session_start();?>
    
    <!-- <p>Placement des stagiaire ! </p>
    <tr>
        <th>Place Stagiaire</th>
        <th>Nom Stagiaire</th>
    </tr>-->
    <div class="possitionBouton">
        <form action="../controller/execute2.php" method="get">
            <input class="colorbtn" type="submit" value="random tirage" style="width:250px" />
        </form>
    </div>
    <div class="post">
        
    <div class = "relatif haut3">
	<table>
        <tr>        <!-- Place_1 & 2 -->
            <td>Place_1 <br><?php echo $_SESSION['place_1'];?><br></td>
            <td>Place_2 <br><?php echo $_SESSION['place_2'];?><br></td>
        </tr>
                
        <tr>        <!-- Place_3 & 4 -->
            <td>Place_3<br><?php echo $_SESSION['place_3'];?><br></td>
            <td>Place_4<br><?php echo $_SESSION['place_4'];?><br></td>
        </tr>
    </table>
    </div>
    <div class= "relatif haut gauche">
        <table>       
        <tr>        <!-- Place_5 & 6 -->
            <td>Place_5<br><?php echo $_SESSION['place_5'];?><br></td>
            <td>Place_6<br><?php echo $_SESSION['place_6'];?><br></td>
        </tr>       
        <tr>        <!-- Place_7 & 8 -->
            <td>Place_7<br><?php echo $_SESSION['place_7'];?><br></td>
            <td>Place_8<br><?php echo $_SESSION['place_8'];?><br></td>
        </tr>
  
        </table>
    </div>
    <div class= "relatif haut droite">
        <table>   
        <tr>        <!-- Place_9 & 10 -->
            <td>Place_9<br><?php echo $_SESSION['place_9'];?><br></td>
            <td>Place_10<br><?php echo $_SESSION['place_10'];?><br></td>
        </tr>    
        <tr>        <!-- Place_11 & 12 -->
            <td>Place_11<br><?php echo $_SESSION['place_11'];?><br></td>
            <td>Place_12<br><?php echo $_SESSION['place_12'];?><br></td>
        </tr>  
        </table>
    </div>
    <div  class = "relatif  haut2">
        <table>           
        <tr>    <!-- Place_13 & 14 -->
            <td>Place_13<br><?php echo $_SESSION['place_13'];?><br></td>
            <td>Place_14<br><?php echo $_SESSION['place_14'];?><br></td>
        </tr>       
        <tr>    <!-- Place_15 & 16 -->
            <td>Place_15<br><?php echo $_SESSION['place_15'];?><br></td>
            <td>Place_16<br><?php echo $_SESSION['place_16'];?><br></td>
        </tr>  
        </table>
    </div>

        <form action="../controller/execute4.php" method="get">   
        <input type="submit" value="extraction_CSV" />
        
        </form>

      

</div>
</body>
</html>