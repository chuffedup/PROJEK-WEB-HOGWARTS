<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE-edge">
 <meta name="viewport" content="width=device-width, initial-scale-1.0">
   <title>Prestasi</title>
   <link href="cbjek.css" rel="stylesheet" type="text/css">
</head>
<body>
<br>
<header>
  <nav>
     <div class="navigasi">
      <a href=""><img src="lhs.png" style="float:left;margin:4px 8px 4px 8px" class="gambar"></a>
	  <ul>
       <li><a href="cbpronew.php">BERANDA</a></li>
	   <li class="dropdown">
	    <a href="#" class="dropbtn">PROFIL</a>
	    <div class="dropdown-content">
         <a href="Sejarah.php">Sejarah</a>
         <a href="visimisi.php">Visi dan Misi</a>
         <a href="gurustaf.php">Guru dan Tenaga Pendidik</a>
		 <a href="fasil.php">Fasilitas</a>
		</div>
       </li>
		<li class="dropdown">
	    <a href="#" class="dropbtn">AKADEMIK</a>
	    <div class="dropdown-content">
         <a href="eskulkul">Kegiatan Ekstrakurikuler</a>
         <a href="prestasi.php">Prestasi</a>
		</div>
	   </li>
	   <li class="dropdown">
	   <a href="#" class="dropbtn">PENDAFTARAN</a>
	    <div class="dropdown-content">
         <a href="pendaftaran.php">Pendaftaran</a>
         <a href="pengumuman.php">Pengumuman Peserta Didik</a>
		</div>
		</li>
       <li><a href="kontak.php">KONTAK</a></li>
      </ul>
     </div>
	 </nav>
</header>
<div class="container">
<h1 align="center">PENDATAAN PRESTASI</h1>
<form action="laypres.php" method="POST">
<label for="nama">Nama</label>
<input type="text" name="nama" id="nama">
<label for="kategori">Kategori Lomba</label>
<input type="text" name="kategori" id="kategori">
<label for="tingkat">Tingkat</label>
<input type="text" name="tingkat" id="tingkat">
<label for="lomba">Nama Lomba</label>
<textarea name="lomba" cols="10" rows="3"></textarea>
<label for="predikat">Predikat</label>
<input type="text" name="predikat" id="predikat">
<input type="submit" value="Kirim"><br>
<input type="clear" value="Hapus">
</form>
</div>
<br>
<footer>
   <ul class="social_icon">
    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
	<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
	<li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
	<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
   </ul>
	<p>&copy2021 Hogwarts School</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
  </script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
  </script>
</body>
</html>
