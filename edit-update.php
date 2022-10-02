<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nomer =$_POST['nomer'];
        $gambar =$_POST['gambar'];
        $berita =$_POST['berita'];
        $isi=$_POST['isi'];
        $tempat_kejadian =$_POST['tempat_kejadian'];
        $tanggal_kejadian =$_POST['tanggal_kejadian'];

        $sql = "UPDATE `berita_update` SET `nomer`='$nomer',`gambar`='$gambar',`berita`='$berita',`isi`='$isi',`tanggal_kejadian`='$tanggal_kejadian',`tanggal_update`='$tanggal_update' WHERE nomer='$nomer'";

        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: update.php');
        }else{
            header('Location: edit-update.php?status=gagal');
        }
    }
?>