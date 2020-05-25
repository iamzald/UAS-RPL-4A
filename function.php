<?php 
$conn = mysqli_connect("localhost", "root", "", "cateringku1");
$result = mysqli_query($conn,"SELECT * FROM pemesanan");



function registrasi($data){
	global $conn;

	$email =  $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	if( $password !== $password2) {
		echo " <script>
	alert('konfirmasi password salah');
			</script>";
			return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "INSERT INTO user VALUES('', '$email', '$password')");
	return mysqli_affected_rows($conn);
}
function query($query){
	global $conn;
	$result = mysqli_query($conn, $quey);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		$row[] = $row;
			}
			return $rows;
}
function tambah($data){
	
}
function hapusmenu ($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM menu WHERE ID_MENU = $id ");
	return mysqli_affected_rows($conn);
}
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM pemesanan WHERE ID_PESAN = $id ");
	return $conn;
}


 ?>

