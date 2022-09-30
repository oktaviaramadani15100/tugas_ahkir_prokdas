<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nomer = $_POST ['nomer'];
    $gambar = $_POST ['gambar'];
    $berita = $_POST ['berita'];
    $tempat_kejadian = $_POST ['tempat_kejadian'];
    $tanggal_kejadian = $_POST ['tanggal_kejadian'];

    $sql="INSERT INTO `dashboard`(`nomer`, `gambar`, `berita`, `tempat_kejadian`, `tanggal_kejadian`) 
    VALUES ('$nomer','$gambar','$berita','$tempat_kejadian','$tanggal_kejadian')";

    $query=mysqli_query($connect, $sql);

    if($query){
        header('Location: dashboard.php');
    }else{
        header('Location: simpan-berita.php?status=gagal');
    }
}
?>