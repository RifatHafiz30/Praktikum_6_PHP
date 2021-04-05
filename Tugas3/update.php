<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<?php
		include "tugas3koneksi.php";
	?>
	<h3 align="center">Ubah Data Pegawai</h3><br>
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
	?>
	</table><br>
	<form method="POST" action="update.php">
		<table align="center">
			<tr>
				<td>Kode Pegawai : </td>
				<td><input type="text" name="kode"></td>
			</tr>
			<tr>
				<td>Nama Pegawai : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat Pegawai : </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Bidang Kerja : </td>
				<td><input type="text" name="bidang"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Ubah Data"></td>
				<td><a href="tugas3.php"><input type="button" value="Kembali"></a></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['Submit'])) {
			$kode=$_POST['kode'];
			$nama=$_POST['nama'];
			$alamat=$_POST['alamat'];
			$bidang=$_POST['bidang'];
			$sql="UPDATE pegawai SET KODE_PEGAWAI='$kode',KODE_BIDANG='$bidang',NAMA_PEGAWAI='$nama',ALAMAT_PEGAWAI='$alamat' WHERE KODE_PEGAWAI='$kode'";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
			} else {
				echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
		}
		mysqli_close($conn);
	?>
</body>
</html>