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
     <!-- icon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- font google -->
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-1">
        <header> <i class="fa-brands fa-firefox-browser"></i> ONE <p>LIPUTAN</p> </header>
        
        <ul>
            <p> <a href="dashboard.php"></a> <i class="fa-solid fa-house"></i>Beranda</p>
           <p> <a href="update.php"></a> <i class="fa-solid fa-square-pen"></i>Berita Update</p> 
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
            
            <div class="data">
                <label>Gambar</label>
               <i><input value="<?php echo $pel ['gambar']?>" type="file" name="gambar"></i> 
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
        </div>
            <div class="simpan-berita">
                <input type="submit" name="simpan" value="simpan">
            </div>
        </form>
    </div>
</body>
</html>