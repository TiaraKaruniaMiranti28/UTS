<?php
include("koneksi.php");
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['pertanyaan'];
$sql = "INSERT INTO pertanyaan(nama, email, pertanyaan)
		VALUES ('$nama','$email','$pertanyaan')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location: question.php');
?>