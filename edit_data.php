<?php 
include "config/koneksi.php";
include "config/function.php";

$id = $_GET['id'];
$data = mysql_fetch_array(mysql_query("select * from peserta where nik = '$id'"));

?>
<html>
<link rel="shortcut icon" href="Gambar/logo-kominfo-copy.jpg" type="image/x-icon">
<title>
SKKNI
</title>
<head>
<h3><a href="index.php" >form input data</a> || <a href="laporan/data_peserta.php" >laporan</a></h3>
</head>
<body>
<h3><label>Edit Data</label></h3>
<form method="post"  action="edit.php" validate>
<table border='15'  style="background-color:#d1FFFF">
<td>Nama</td>
<td><input type="text" name="nama" value="<?PHP echo $data['0']; ?>" required ></td>
<tr>
<td>NIK</td>
<td><input type="text" disabled  value="<?PHP echo $data['nik']; ?>" placeholder="harus angka"  required ></td>
<input type="hidden"  name="nik"  value="<?PHP echo $data['nik']; ?>"   >
<tr>
<td>HP</td>
<td><input type="text" name="hp" onkeyup='angka(this)' value="<?PHP echo $data['2']; ?>" placeholder="harus angka" required ></td>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?PHP echo $data['3']; ?>" required></td>
<tr>
<td>Skema Sertifikasi</td>
<td>
<select name="skema_sertifikasi" required>
<?php
$Programming="";
$Networking="";
$Multimedia="";
					  if($data['4']=="Programming"){
						  $Programming="selected";
					  }else if($data['4']=="Networking"){
						  $Networking="selected";
					  }else if($data['4']=="Multimedia"){
						  $Multimedia="selected";
					  }
					  ?>
                        <option></option>
                            <option value="Programming" <?php echo $Programming?> >Programming</option>
                            <option value="Networking" <?php echo $Networking?> >Networking</option>
                            <option value="Multimedia" <?php echo $Multimedia?> >Multimedia</option>
                        </select>
						</td>
<tr>
<td>Tempat Uji Kompetensi</td>
<td><input type="text" name="tempat_uji_kompetensi" value="<?PHP echo $data['5']; ?>" required></td>
<tr>
<td>Rekomendasi</td>
<td><input type="text" name="recomendasi" value="<?PHP echo $data['6']; ?>" required></td>
<tr>
<td>Tanggal Terbit Sertifikat</td>
<td><input type="date" name="tanggal_terbit_sertifikat" value="<?PHP echo $data['7']; ?>" required></td>
<tr>
<td>Tanggal Lahir</td>
<td><input type="date" name="tanggal_lahir" value="<?PHP echo $data['8']; ?>" required></td>
<tr>
<td>Organisasi</td>
<td><input type="text" name="organisasi" value="<?PHP echo $data['9']; ?>" required></td>
  </tr>
<tr><td colspan="2"><center><button type="submit" value="simpan">UBAH</button></center></td></tr>

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