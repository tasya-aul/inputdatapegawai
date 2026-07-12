<!DOCTYPE html>
<html>
<head>
    <title>Toko Bangunan Singgalang</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #FF8C00;
            background-image: url('fotoyy.JPEG');
        }

        .container{
            width: 70%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
        }

        h1{
            color: orange;
            text-align: center;
        }

        a{
            text-decoration: none;
            color: white;
            background-color: orange;
            padding: 8px 12px;
            border-radius: 3px;
        }

        a:hover{
            background-color: orange;
        }

        p{
            line-height: 1.5;
        }

        .footer{
            text-align: center;
        }
    </style>
</head>e
<body>

<div class='container'>

<?php
//tag h1-h6 digunakan untuk mengatur besar huruf
echo "<h1>TOKO BANGUNAN SINGGALANG</h1>";
echo "<hr>";
echo"<a href='halaman1.php'>Beranda</a> |";
echo"<a href='halamanprofil.php'>Profil Jaya Elektronik</a> |";
echo"<a href='halaman3.php'> Input Data Pegawai Toko</a> |";
echo"<a href='halaman44.php'>Kontak</a>";

echo "<hr>";

echo "<h2>Selamat Datang</h2>";

echo "<p>
Halo semuanya selamat datang di toko bangunan SINGGALANG. Toko kami menyediakan berbagai kebutuhan untuk pembangunan rumah. Kami tidak hanya menjual lewat offline juga bisa pesan by WA. Jadi jangan khawatir kesusahan melakukan pesanan. 
<p>
Jika kalian kepo dengan toko bangunan SINGGALANG yuk klik dibawah ini untuk melihat profil kami.
</p>";

echo "<a href='halamanprofil.php'>lihat profil</a>";

echo "<hr>";

echo "<p>© 2026 SINGGALANG BANGUNAN</p>";
?>
</div>

</body>
</html>
";
?>