<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE-edge">
 <meta name="viewport" content="width=device-width, initial-scale-1.0">
   <title>Pendaftaran</title>
   <link href="cbjek.css" rel="stylesheet" type="text/css">
 <style>
  body{background-image: url("daftar.png");
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
<h1 align="center">PENDAFTARAN SISWA BARU</h1>
<form action="laypen.php" method="POST">
<label for="nama">Nama Lengkap</label>
<input type="text" name="nama" id="nama">
<label for="alamat">Alamat</label>
<textarea name="alamat" cols="10" rows="3"></textarea>
<label for="tempat">Tempat Lahir</label>
<input type="text" name="tempat" id="tempat">
<label for="tanggal">Tanggal Lahir</label>
<input type="date" name="tanggal" id="tanggal">
<label for="jenis">Jenis Kelamin</label>
<input type="radio" name="jenis" id="jenis" value="Laki-Laki">Laki-Laki
<input type="radio" name="jenis" id="jenis" value="Perempuan">Perempuan
<label for="telp">Nomor Telepon</label>
<input type="number" name="telp" id="telp">
<label for="email">Email</label>
<input type="email" name="email" id="email">
<input type="submit" value="Daftar"><br>
<input type="clear" value="Batal">
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
