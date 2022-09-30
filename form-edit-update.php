<?php
 include 'koneksi.php';

 $nomer = $_GET['nomer'];
 $sql = "SELECT * FROM berita_update WHERE nomer='$nomer'";
 $query = mysqli_query($connect, $sql);
 $pel = mysqli_fetch_assoc($query);

 if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container-1">
        <header>Edit Berita</header>
        <ul>
            <li><a href="dashboard.php">Beranda</a></li>
            <li><a href="update.php">Berita Update</a></li>
        </ul>
    </div>
    <div class="container-2">
        <form action="edit-update.php" method="POST">
            <div class="tambah-berita">
                <h3>Tambah Berita</h3>
            </div>
            <div class="data">
                <label>Nomer</label>
                <input value="<?php echo $pel ['nomer']?>" required="required" type="text" name="nomer">
            </div>
            <div class="gambarr">
                <label>Gambar</label>
                <input value="<?php echo $pel ['gambar']?>" type="file" name="gambar">
            </div>
            <div class="data">
                <label>Berita</label>
                <input value="<?php echo $pel ['berita']?>" required="required" type="text" name="berita">
            </div>
            <div class="data">
                <label>Tempat Kejadian</label>
                <input value="<?php echo $pel ['tempat_kejadian']?>" required="required" type="text" name="tempat_kejadian">
            </div>
            <div class="data">
                <label>Tanggal Kejadian</label>
                <input value="<?php echo $pel ['tanggal_kejadian']?>" required="required" type="text" name="tanggal_kejadian">
            </div>
            <div class="data">
                <label>Tanggal Update</label>
                <input value="<?php echo $pel ['tanggal_update']?>" required="required" type="text" name="tanggal_update">
            </div>
            <div class="simpan-berita">
                <input type="submit" name="simpan" value="simpan">
            </div>
        </form>
    </div>
</body>
</html>