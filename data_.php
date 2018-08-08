<?php
include '../config/koneksi.php';
$id = $_GET['id'];
?>
     						
<!--?php 
 if (isset($_GET['a'])){
		$pesan=mysql_real_escape_string($_GET['a']);
			 if($pesan=="y"){
			echo"<center><div><b> Data Dihapus !! </b></div></center>";
	}else	 if($pesan=="e"){
			echo"<center><div><b> Data berhasil Diedit !! </b></div></center>";
		}
 } 
?-->	
<head>
<h3><a href="../index.php" >form input data</a> || <a href="data_peserta.php" >laporan</a></h3>
</head>
  <body class="nav-md" style="background-color:#d1FFFF">
  <font face="comic sans MS" >
	<center><h1> Data Peserta</h1><br>
                    <table border="1" >
                      <thead  style="color:black">
                        <tr >
                          <th >NO </th>
                          <th >NAMA </th>
                          <th >NIK </th>
                          <th >TANGGAL LAHIR </th>
                          <th >NO HANDPHONE </th>
                          <th >EMAIL </th>
                          <th >SKEMA </th>
                          <th >TEMPAT TEST </th>
                          <th >REKOMENDASI  </th>
                          <th >ORGANISASI </th>
                          <th >TGL TERIMA SERTIFIKAT</th>
                          <th >PILIHAN </th>
                      </thead>
                      <tbody>
					  
<?php		
$query_mysql = mysql_query("SELECT * FROM peserta where skema_sertifikasi='$id' or rekomendasi ='$id'")or die(mysql_error());
				$nomor = 1;
				while($row = mysql_fetch_array($query_mysql)){	 
		?>		
                        <tr>
				<td align='center'><?=$nomor?></td>
				<td><?=ucwords(strtolower($row['0']))?></td>
				<td><?=$row['1']?></td>
				<td><?=$row['8']?></td>
				<td><?=$row['2']?></td>
				<td><?=$row['3']?></td>
				<td><a href="data_.php?id=<?=$row['4']?>" ><?=$row['4']?></a></td>
				<td><?=$row['5']?></td>
				<td><a href="data_.php?id=<?=$row['6']?>" ><?=$row['6']?></a></td>
				<td><?=$row['9']?></td>
				<td align="center"><?=$row['7']?></td>
				<td align="center">	
			<label onclick="if(confirm('Mau ke form Edit data???')){ location.href='../edit_data.php?id=<?php echo $row['1']; ?>' }"  class="btn btn-danger btn-sm"> Edit</label> 
			<label onclick="if(confirm('Hapus data???')){ location.href='../_hapus_data.php?id=<?php echo $row['1']; ?>' }"  class="btn btn-danger btn-sm"> Hapus</label> 
			
				</td>
                        </tr> 
						<?php
				$nomor++;	 }
				?>
                        <tr>
                        </tr> 
                      </tbody>
                    </table>   
						<td align="right" colspan="12">jumlah :  <?=$nomor-1?> </td>     
				</font>
						</body>