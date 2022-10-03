<?php
    include 'koneksi.php';
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
            <p><i class="fa-solid fa-house"></i> <a href="dashboard.php">Beranda</a></p>
           <p><i class="fa-solid fa-square-pen"></i> <a href="update.php">Berita Update</a> </p> 
        </ul>
    </div>

    <div class="container-2">
        <h1>DATA ONE LIPUTAN</h1>
        <h3><a href="tambah_berita.html">CREATE</a></h3>
        <table border="2" cellpadding="10" cellspacing="0">
            <tr class="judul">
                <th>Nomer</th>
                <th>Gambar</th>
                <th>Berita</th>
                <th>Isi berita</th>
                <th>Tanggal Kejadian</th>
                <th>Action</th>
            </tr>
            <tr>
                <?php
                    $sql="SELECT * FROM dashboard";
                    $query= mysqli_query($connect, $sql);
                    while($pel=mysqli_fetch_array($query)){
                        echo"
                            <tr>
                                <td>$pel[nomer]</td>
                                <td>$pel[gambar]</td>
                                <td>$pel[berita]</td>
                                <td>$pel[tempat_kejadian]</td>
                                <td>$pel[tanggal_kejadian]</td>
                                <td>
                                <a href='form-edit-berita.php?nomer=".$pel['nomer']."'><button class='merah'>Edit</button></a>
                                <a href='delete.php?nomer=".$pel['nomer']."'><button class='hijau'>Hapus</button></a>
                                </td>
                            </tr>";
                    };
                ?>
            </tr>
        </table>

    </div>
</body>
</html>