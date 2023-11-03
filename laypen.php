<?php
$koneksi = mysqli_connect("localhost", "root", "", 
"layanan");

if (!$koneksi) {
 ("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$tempat = $_POST["tempat"];
$tanggal = $_POST["tanggal"];
$jenis = $_POST["jenis"];
$telp = $_POST["telp"];
$email = $_POST["email"];

$sql = "INSERT INTO pendaftaran (nama, alamat, tempat, tanggal, jenis, telp, email) VALUES ('$nama', '$alamat', '$tempat', '$tanggal', '$jenis', '$telp', '$email')";
$run = mysqli_query($koneksi, $sql);

header("location: http://localhost/proyekweb/berhasil.php");
mysqli_close($koneksi);
}
?>