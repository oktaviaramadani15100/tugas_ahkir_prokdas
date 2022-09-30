<?php
    include 'koneksi.php';

    $nomer =$_GET['nomer'];

    $sql="DELETE FROM `berita_update` WHERE nomer='$nomer'";
    $query= mysqli_query($connect, $sql);

    if($query){
        header('Location: update.php');
    }else{
        header('location: delete-update.php?status=gagal');
    }
?>