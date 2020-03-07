<?php
    include 'config.php';
    $hash = $_GET['ac'];
    $query = mysqli_query($database, "SELECT * FROM `Verify` WHERE `hash` = '$hash'");
    
    if(mysqli_num_rows($query)==0){
        header('location: submit.php?email=&status=false');
        exit;
    }
    
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    mysqli_query($database, "DELETE FROM `Verify` WHERE `id` = $id");
    header('location: index.php');
?>
