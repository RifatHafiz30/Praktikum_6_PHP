<!--deklarasi script php-->
<?php
	//membuka koneksi ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");

	//cek koneksi ke MySQL
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Sudah Connect ke MySQL"."<br>";
	}
?>