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
    <link rel="stylesheet" href="berita.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,300&family=Lato:wght@100&family=Lobster&family=Playfair+Display:ital@1&family=Roboto:ital,wght@0,100;0,300;0,500;1,100&display=swap" rel="stylesheet">
  
<link rel="stylesheet" href="berita.css">
</head>
<body>
    <div class="head">
        <div class="header">
            <h1 class="one">ONE</h1><h1 class="lplogo">LIPUTAN</h1>
        </div>
        <div class="navbar">
            <a href="../home/page.html">HOME</a>
            <a href="../berita_terkini/aksi_demo.html">BERITA TERKINI</a>
            <a href="../sport/juventus.html">SPORT</a>
            <a href="../otomotif/otomotip1.html">AUTOMOTIF</a>
        </div>
    </div>

    <div class="judul">
        <h1><?php echo $pel['berita'] ?> </h1>
    </div>

    <div class="foto">
     <?php  echo "<img src='foto/$pel[gambar]'>";?>
    </div>

    <p> 
        <?php  echo $pel['isi']?>
    </p>

            <hr>
            <div class="footer">
            <div class="text-footer">           
                <h2><b><span class="one">ONE</span><span class="liputan"> LIPUTAN</span></b></h2>
            </div>
        <br>
            <div class="part">
                <h5><b>part of <span class="one">ONE</span><span class="liputan"> LIPUTAN</span></b></h5>
            </div>
        </div>
    <div class="text-footer2">
            <h3><b>Kategori</b></h3>
        <br>
            <h5>News</h5>
        <br>
            <h5>Firance</h5>
        <br>
            <h5>Teknologi</h5>
        <br>
            <h5>Sport</h5>
        <br>
            <h5>Entertaiment</h5>
    </div>
    <div class="text-footer3">
            <h3><b>Layanan</b></h3>
        <br>
            <h5>Pasang Mata</h5>
        <br>
            <h5>Berbuatbaik_id</h5>
        <br>
            <h5>Detik Event</h5>
    </div>
    <div class="text-footer4">
            <h3><b>Informasi</b></h3>
        <br>
            <h5>Redaksi</h5>
        <br>
            <h5>Media Printer</h5>
        <br>
            <h5>Karir</h5>
        <br>
            <h5>Kotak Pos</h5>
    </div>
        <div class="bawah-footer">
            <h5>Copyright @2022 detik.com</h5>
        </div>
        <hr>
</body>
</html>