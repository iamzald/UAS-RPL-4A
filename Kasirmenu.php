<?php
mysqli_connect("localhost", "root", "", "cateringku1"); 
$conn = mysqli_connect("localhost", "root", "", "cateringku1");
if (isset($_POST["submit"])){

	$Jenis = $_POST["Jenis"];
	$Harga = $_POST["Harga"];
	$gambar = $_POST["gambar"];

	$query = "INSERT INTO menu VALUES
			('', '$Jenis', '$Harga', '$gambar')

	";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0 ) {
		echo "berhasil";
		
	} else {
		echo "gagal";
		echo "<br>";
		echo myqli_error($conn);
	}
} 

require 'verify_admin.php';
require 'headerkasir.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah menu</title>
</head>
<body style="background-color: #ffe066;">
	<h1 class="mx-auto mid">Tambah Menu</h1>
	<form action="" method="post">
		<div class="mx-auto mid">
		<ul>
			<li>
				<label for="Jenis">Nama makanan :</label>
				<input type="text" name="Jenis" id="Jenis">
			</li>
			<li>
				<label for="Harga">HARGA :</label>
				<input type="number" name="Harga" id="Harga">
			</li>
			<li>
				<label for="gambar">GAMBAR :</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">TAMBAH MENU</button>
			</li>
		</ul>
	</form>
	</div>

</body>
</html>