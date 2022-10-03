
<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <title>One Liputan</title>
    
</head>
<body>
    <div class="head">
        <div class="header">
            <h1 class="one">ONE</h1><h1 class="lplogo">LIPUTAN</h1>
        </div>
        <div class="navbar">
            <a href="index.php">HOME</a>
            <a href="aksi_demo.html">BERITA TERKINI</a>
            <a href="juventus.html">SPORT</a>
            <a href="otomotip2.html">AUTOMOTIF</a>
        </div>
    </div>
    <div class="maincontainer">
        <div class="card cardmain">
            <h3 class="cmaintxt">Aksi Demo Mahasiswa, Jalan ke Arah <br>
                 Istana Bogor Macet</h3>
        </div>
        <div class="card2">
            <img src="" alt="">
        </div>
    </div>
    <hr class="hr1" style="width: 1065px;">
    <div class="middlecontainer">
        <h2>Berita Terkini</h2>
        <table class="midarticles">
            <tr class="midimages1">
                <td><img src="assets/foto2.jpg" alt=""></td>
                <td class="marticle1">
                   <a href="berita_terkini/aksi_demo.html"><h2>Aksi  Demo Mahasiswa, Jalan Ke Istana Bogor Macet</h2></a>
                    <h5>29 September 2022</h5>
                </td>
            </tr>
            <tr class="midimages2">
                <td><img src="assets/foto3.jpg" alt=""></td>
                <td class="marticle1">
                  <a href="berita_terkini/riski_bilar.html"><h2>Pernikahan Rizky Bliar-Lesti Kejora Penuh Kontroversi, <br>
                        Kini Ada Dugaan KDRT</h2></a>
                    <h5>29 September 2022</h5>
                </td>
            </tr>
        </table>
    </div>
    <hr class="hr2" style="width: 1065px;">
    <div class="popularcontainer">
        <h2>Berita Terpopuler</h2>
        <div class="trending">
      <?php
        $sql="SELECT * FROM berita_update";
        $query= mysqli_query($connect, $sql);
        while($pel=mysqli_fetch_array($query)){
            echo"
            <div class='trendimg'>
                <div class='tdt1'><img src='foto/$pel[gambar]' alt=''></div>
                <a href='berita.php?nomer=".$pel['nomer']."'>$pel[berita]</a>
            </div>
        
         
          
           
            ";
        }
      ?>
        </div>
    </div>
    <div class="footer">
        <div class="text-footer">
            <!-- <img src="assets/img/logo.png" alt="eror">             -->
            <h2><b><span class="one2">ONE</span><span class="liputan"> LIPUTAN</span></b></h2>
        </div>
    <br>
        <div class="part">
            <h5>part of</h5>
            <h5 class="one">ONE</h5><h5 class="liputan"> LIPUTAN</h5>
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
</body>
</html>