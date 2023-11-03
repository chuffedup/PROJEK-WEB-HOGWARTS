<?php
// Membuka koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", 
"layanan");

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah formulir telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama = $_POST["nama"];
$kategori = $_POST["kategori"];
$tingkat = $_POST["tingkat"];
$lomba = $_POST["lomba"];
$predikat = $_POST["predikat"];

// Menyisipkan data ke dalam tabel pendaftaran
$sql = "INSERT INTO prestasi (nama, kategori, tingkat, lomba, predikat) VALUES ('$nama', '$kategori', '$tingkat', '$lomba', '$predikat')";
$run = mysqli_query($koneksi, $sql);

header("location: http://localhost/proyekweb/berhasilpres.php");
mysqli_close($koneksi);

}

?>