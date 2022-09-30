<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nomer =$_POST['nomer'];
        $gambar =$_POST['gambar'];
        $berita =$_POST['berita'];
        $tempat_kejadian =$_POST['tempat_kejadian'];
        $tanggal_kejadian =$_POST['tanggal_kejadian'];

        $sql = "UPDATE dashboard SET gambar='$gambar', berita='$berita', tempat_kejadian='$tempat_kejadian', tanggal_kejadian='$tanggal_kejadian' WHERE nomer='$nomer'";

        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: dashboard.php');
        }else{
            header('Location: edit-berita.php?status=gagal');
        }
    }
?>