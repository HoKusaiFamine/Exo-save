<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/delete.css">
</head>
<body>
<nav
      class="navbar navbar-expand-lg navbar-light bg-black text-white"
      style="height: 10em"
    >
      <div class="d-flex align-items-center justify-content-between col">
        
<!-- Left elements -->
        <div class="d-flex">
          <a class="navbar-brand me-2 mb-1" href="javascript:history.go(-1)">
            <svg
              width="48"
              height="48"
              fill="currentColor"
              class="bi text-white mx-5 bi-skip-backward-circle-fill"
              viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.79-2.907L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.79-.407z"/>
            </svg>
          </a>
          <div class = bouton>
    <form action= "../view/index.html" methode="get">
    <input type = "submit" value="page d'accaeuil">
    </form>
    </div>
        </div>
        <!-- Left elements -->
       <!-- right elements -->
        <div class="d-flex">
        <a href="../Controller/executeSelect.php"
            ><img src="../View/asset/img/list.png"  
              height="130"
            />
          </a>
          <a href="../View/update.php"
            ><img src="../View/asset/img/update.png"  
              height="130"
            />
          </a>
          <a href="../View/delete.php"
            ><img src="../View/asset/img/trash.jpg"  
              height="130"
            />
          </a>
        </div>
        <!-- right elements -->
      </div>
    </nav>  
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>selectionne un ou plusieur nom pour suprimer de la BDD</h4>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <div class="card mt-4">
            <div class="card-body">               
                        <form action="../controller/executeDelete.php" method="POST">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            <button type="submit" name="stud_delete_multiple_btn" class="btn btn-danger">Delete</button>
                                        </th>
                                        <th>ID</th>
                                        <th>NOM</th>
                                        <th>PRENOM</th>
                                        <th>PLACE</th>
                                    </tr>
                                
                                <form action="../Controller/executeDelete.php" method="post" class = "btn">  
                <?php
                for ($i=0; $i < count($_SESSION['stagiaire']); $i++) {
                    echo '<tr>';
                    echo '<td>' . '<input type = "checkbox" name = "ID[]" value = "'.$_SESSION['stagiaire'][$i]['ID'] . '"</td>';
                    echo '<td>' . $_SESSION['stagiaire'][$i]['ID'] . '</td>';
                    echo '<td>' . $_SESSION['stagiaire'][$i]['NOM'] . '</td>';
                    echo '<td>' . $_SESSION['stagiaire'][$i]['PRENOM'] . '</td>';
                    echo '<td>' . $_SESSION['stagiaire'][$i]['PLACE'] . '</td>';
                    echo '</tr>';
                }
                ?> 
                </tbody>
                </table>
            </div> 
                        </form>                                
                                </form>                            
                </div>            
                  
             
                     
       
    


</body>
</html>