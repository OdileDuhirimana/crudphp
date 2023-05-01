<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id =  $_GET['deleteid'];
    
    $sql = "DELETE FROM `Users` where id = $id";
    $result= mysqli_query($conn, $sql);

    if($result){
        header('location:read.php');
    } else{
        echo "Data not deleted";
    }
}
?>