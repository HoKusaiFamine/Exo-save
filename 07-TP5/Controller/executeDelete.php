<?php
/*
include "../modele/DBManagement.php";
session_start();
$con = mysqli_connect("localhost","root","","dwwm_2023");



if(isset($_POST['stud_delete_multiple_btn']))
{
    $all_id = $_POST['stud_delete_id'];
    $extract_id = implode(',' , $all_id);
    // echo $extract_id;

    $query = "DELETE FROM stagiaire WHERE id IN($extract_id) ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Deleted Successfully";
        header("Location: ../view/delete.php");
    }
    else
    {
        $_SESSION['status'] = "Multiple Data Not Deleted";
        header("Location: ../view/delete.php");
    }   
}
*/
include "../Modele/DBManagement.php";
session_start();

$status = deleteStagiaire($_POST['ID']);
$_SESSION['stagiaire'] = selectStagiaire();
if ($status) {
    $_SESSION['stagiaire'] = selectStagiaire();
    header('Location:../View/delete.php');
}else{
    $_SESSION['status'] = "Multiple Data Not Deleted";
    header("Location: ../view/delete.php");
}

?>