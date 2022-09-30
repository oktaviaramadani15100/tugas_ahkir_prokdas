<?php
    include 'koneksi.php';

    $nomer =$_GET['nomer'];

    $sql="DELETE FROM `dashboard` WHERE nomer='$nomer'";
    $query= mysqli_query($connect, $sql);

    if($query){
        header('Location: dashboard.php');
    }else{
        header('location: delete.php?status=gagal');
    }
?>