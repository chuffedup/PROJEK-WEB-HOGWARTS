<?php
$koneksi = mysqli_connect("localhost", "root", "", 
"layanan");

if (!$koneksi) {
 ("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama = $_POST["nama"];
$email = $_POST["email"];
$subjek = $_POST["subjek"];
$pesan = $_POST["pesan"];

$sql = "INSERT INTO kontak (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";
$run = mysqli_query($koneksi, $sql);

header("location: http://localhost/proyekweb/cbpronew.php");
mysqli_close($koneksi);
}
?>