<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nomer = $_POST ['nomer'];
    $gambar = $_POST ['gambar'];
    $berita = $_POST ['berita'];
    $tempat_kejadian = $_POST ['tempat_kejadian'];
    $tanggal_kejadian = $_POST ['tanggal_kejadian'];
    $tanggal_update =$_POST ['tanggal_update'];

    $sql="INSERT INTO `berita_update`(`nomer`, `gambar`, `berita`, `tempat_kejadian`, `tanggal_kejadian`, `tanggal_update`) 
    VALUES ('$nomer','$gambar','$berita','$tempat_kejadian','$tanggal_kejadian','$tanggal_update')";

    $query=mysqli_query($connect, $sql);

    if($query){
        header('Location: update.php');
    }else{
        header('Location: simpan-update.php?status=gagal');
    }
}
?>