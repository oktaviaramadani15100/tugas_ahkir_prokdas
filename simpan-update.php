<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nomer = $_POST ['nomer'];
    $gambar = $_FILES ['gambar'] ['name'];
    if (strlen($gambar)>0) {
        if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
            move_uploaded_file ($_FILES['gambar']['tmp_name'], "foto/".$gambar);
        }
    }
    $berita = $_POST ['berita'];
    $isi = $_POST ['isi'];
    $tanggal_kejadian = $_POST ['tanggal_kejadian'];
    $tanggal_update =$_POST ['tanggal_update'];

    $sql="INSERT INTO `berita_update`(`nomer`, `gambar`, `berita`, `isi`, `tanggal_kejadian`, `tanggal_update`) 
    VALUES ('$nomer','$gambar','$berita','$isi','$tanggal_kejadian','$tanggal_update')";

    $query=mysqli_query($connect, $sql);

    if($query){
        header('Location: update.php');
    }else{
        header('Location: simpan-update.php?status=gagal');
    }
}
?>