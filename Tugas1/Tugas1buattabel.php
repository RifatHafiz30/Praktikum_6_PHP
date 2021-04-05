<!--deklarasi script php-->
<?php
	//script create table
	$sql = "CREATE TABLE buku_tamu (
	ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	NAMA VARCHAR(200) NOT NULL,
	EMAIL VARCHAR(50) NOT NULL,
	ISI TEXT)";

	//cek berhasil / gagal buat tabel
	if (mysqli_query($conn, $sql)) {
		echo "Tabel buku_tamu berhasil dibuat";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
		
?>