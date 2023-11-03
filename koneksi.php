<?php
$koneksi=mysqli_connect("localhost","root","","db_projek");
mysqli_select_db($koneksi,"db_projek") or die("Gagal Terhubung ke database!");
?>