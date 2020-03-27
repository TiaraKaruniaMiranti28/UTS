<!DOCTYPE html>
<html lang="en">
<head>
    <title>QUESTION</title>
    <link rel="stylesheet" href="css_question.css">
</head>
<body>
    <div class="badan-utama">
    <header align = "center">
        <h2>WOMEN.ID</h2>
        <h3>beauty is everyone's right</h3>
    </header>

    <div class="menu-tengah" align="center">
        <h1>QUESTION</h1>
        <p>
            <img src="4.jpg" width="400px" height="230px">
            </p>
        <br>
        <h4>           
            Masih bingung tentang masalah kecantikan? Yuk kirim pertanyaanmu !
            <br>
            WOMEN.ID siap membantu para ladies :)
        </h4>
    </div>

<fieldset  class="simpan">
<h1 align="center">PERTANYAAN</h1>
<form action="simpan.php" method="post">
<p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input placeholder="Nama lengkap anda" type="text" name="nama" required/>
</p>
<p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input placeholder="tiarakm28@gmail.com" type="text" name="email"/>
</p>
<p>Pertanyaan &nbsp;:
<textarea placeholder="Ketikan pertanyaan anda" cols="90" rows="10" name="pertanyaan" required></textarea>
</p>
<p>
<input type="submit" value="Simpan"/>
</p>
</form>
<?php
include("koneksi.php");
$query=mysqli_query($koneksi,'select * from question');
while($data=mysqli_fetch_array($query))
{
$nama = $data['nama'];
$email= $data['email'];
$isi = $data['pertanyaan'];
echo "
<b>$nama</b>
<br/>
<a class='kecil' title='Kirim Email' href='mailto:$email'>[EMAIL]</a>
<br/>
<i class='ganti'>'$pertanyaan'</i>
<br/>
";}
?>
</fieldset>

    <a class=" tombol" href="form1.php">Back</a>

    <footer>
        @copyright 2020 || by Tiara Karunia Miranti
    </footer>
 
    </div>
 </body>
</html>