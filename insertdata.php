<!--deklarasi script php-->
<?php
	//deklarasi variabel untuk nama server, username, dan password
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//membuka koneksi ke database myDB
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//cek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	// query membuat tabel, harus dimasukkan satu per satu. gabisa langsung 3 gini
	$sql = "INSERT INTO liga (kode,negara,champion)
	VALUES ('Jer','Jerman','4')";
	$sql = "INSERT INTO liga (kode,negara,champion)
	VALUES ('Spa','Spanyol','3')";
	$sql = "INSERT INTO liga (kode,negara,champion)
	VALUES ('Eng','English','3')";

	//cek berhasil / gagal buat tabel
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>