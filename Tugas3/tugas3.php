<!DOCTYPE html>
<html>
<head>
	<title>MANIPULASI DATA</title>
</head>
<body>
	<?php
		include "tugas3koneksi.php";
	?>
	<h1 align="center">DATABASE PEGAWAI PT MAJU SEJAHTERA</h1>
	<h3 align="center">Silakan melakukan manipulasi data pegawai pada halaman ini</h3>
	<table align="center" border="3">
		<tr>
			<td>Kode Pegawai</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
			<td>Bidang Kerja</td>
		</tr>
	
	<?php
		$sql="SELECT * FROM pegawai";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($tampil= mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$tampil['KODE_PEGAWAI']."</td>";
				echo "<td>".$tampil['NAMA_PEGAWAI']."</td>";
				echo "<td>".$tampil['ALAMAT_PEGAWAI']."</td>";
				echo "<td>".$tampil['KODE_BIDANG']."</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "</tr>";
	}
	mysqli_close($conn);
	?>
	</table>
	<br>
	<table align="center">
		<tr>
			<td><a href="insert.php"><input type="button" value="Tambah Data"></a></td>
			<td><a href="update.php"><input type="button" value="Ubah Data"></a></td>
			<td><a href="delete.php"><input type="button" value="Hapus Data"></a></td>
		</tr>
	</table>
</body>
</html>