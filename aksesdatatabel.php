<!--deklarasi script php-->
<?php
	//deklarasi variabel untuk nama server, username, dan password
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//membuka koneksi
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

	// query select
	$sql = "SELECT kode, negara, champion FROM liga";
	$result = mysqli_query($conn,$sql);
	
	//menampilkan hasil
	if (mysqli_num_rows($result)>0) {
		while ($row= mysqli_fetch_assoc($result)) {
			echo "kode: ".$row["kode"]." - Negara: ".$row["negara"]." ".$row["champion"]."<br>";
		}
	} else {
		echo "0 result";
	}
	//menutup koneksi
	mysqli_close($conn);
?>