<?php 
include "function.php";

?>
<html>
<link rel="shortcut icon" href="Gambar/logo-kominfo-copy.jpg" type="image/x-icon">
<title>
SKKNI
</title>
<head>
<h3><a href="index.php" >form input data</a> || <a href="data_peserta.php" >laporan</a></h3>
</head>
<body> 
<h3><label>Input Data</label></h3>
<form method="post"  action="simpan.php" validate>
<table border='15'  style="background-color:#d1FFFF">
<td>Nama</td>
<td><input type="text" name="nama" value="" required ></td>
<tr>
<td>NIK</td>
<td><input type="text" name="nik" onkeyup='angka(this)' placeholder=""  required ></td>
<tr>
<td>HP</td>
<td><input type="text" name="hp" onkeyup='angka(this)' placeholder="" required ></td>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="" required></td>
<tr>
<td>Skema Sertifikasi</td>
<td>
<select name="skema_sertifikasi" required>
                            <option value=""></option>
                            <option value="Programming">Programming</option>
                            <option value="Networking">Networking</option>
                            <option value="Multimedia">Multimedia</option>
                        </select>
						</td>
<tr>
<td>Tempat Uji Kompetensi</td>
<td><input type="text" name="tempat_uji_kompetensi" value="" required></td>
<tr>
<td>Rekomendasi</td>
<td><input type="text" name="recomendasi" value="" required></td>
<tr>
<td>Tanggal Terbit Sertifikat</td>
<td><input type="date" name="tanggal_terbit_sertifikat" value="" required></td>
<tr>
<td>Tanggal Lahir</td>
<td><input type="date" name="tanggal_lahir" value="" required></td>
<tr>
<td>Organisasi</td>
<td><input type="text" name="organisasi" value="" required></td>
  </tr>
<tr><td colspan="2"><center><button type="submit" value="simpan">SIMPAN</button></center></td></tr>

</table>
<?php 
 if (isset($_GET['pesan'])){
		$pesan=mysql_real_escape_string($_GET['pesan']);
			 if($pesan=="yes"){
			echo"<div><i class='fa  fa-check'></i> <b> Data Disimpan !! </b></div>";
		}
	
 } 
?>
</body>

</html>
