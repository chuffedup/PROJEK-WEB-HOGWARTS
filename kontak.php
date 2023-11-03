<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE-edge">
 <meta name="viewport" content="width=device-width, initial-scale-1.0">
   <title>Kontak Kami</title>
   <link href="cbjek.css" rel="stylesheet" type="text/css">
<style>
  body{background-image: url("bgkontak.png");
  background-size:cover;
  }
 </style>
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
         <a href="eskulkul.php">Kegiatan Ekstrakurikuler</a>
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
<h1 align="center">KONTAK KAMI</h1>
<p align="center">Hubungi kami<br>Kirimkan pesan kepada kami</p>
<form action="laykon.php" method="POST">
<label for="nama">Nama Lengkap</label>
<input type="text" name="nama" id="nama">
<label for="email">Alamat Email</label>
<input type="text" name="email" id="email">
<label for="subjek">Subjek</label>
<input type="text" name="subjek" id="subjek">
<label for="pesan">Pesan (Optional)</label>
<textarea name="pesan" cols="30" rows="10"></textarea>
<input type="submit" value="Send">
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
