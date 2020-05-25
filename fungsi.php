<?php
$conn = mysqli_connect("localhost", "root", "", "cateringku1");
$result = mysqli_query($conn,"SELECT * FROM pemesanan");
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM pemesanan WHERE ID_PESAN = $id ");
	return mysqli_affected_rows($conn);
}
?>