<?php 
require 'verify_member.php';

//koneksi ke database
	# code...
$conn = mysqli_connect("localhost", "root", "", "cateringku1");
$result = mysqli_query($conn,"SELECT * FROM menu");
if ( isset($_POST["submit"])) 

// echo "
// <script>
// 	alert('data berhasil ditambhkan');
// 	document.location.href = 'pemesanan.php';
// </script>
// ";
// } else  {
// 	echo "
// <script>
// 	alert('data gagal ditambhkan');
// 	document.location.href = 'pemesanan.php';
// </script>

// 	";
// }
{
	$First = $_POST["FIRST_NAME"];
	$Last = $_POST["LAST_NAME"]; 
	$Addres = $_POST["ADDRESS"];
	$notes = $_POST["NOTES"];
	$menu = $_POST["JENIS"];
	$jumlah = $_POST["Jumlah"];

	$query = "INSERT into pemesanan VALUES
	('', '$menu', '$First', '$Last' , '$jumlah', '$notes', '$Addres' ); ";
  var_dump($query);
	mysqli_query($conn, $query);
}
require 'header.php';
require 'footer.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pemesanan</title>
 </head>
 <body  style="background-color: #ffe066;" >
 	<h1>Checkout</h1>
 <form action="" method="POST" class="form-container mx-auto">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">First name</label>
      <input type="name" name="FIRST_NAME" class="form-control" id="inputname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputname">Last name</label>
      <input type="name" name="LAST_NAME" class="form-control" id="inputname">
    </div>
 <div class="form-group col-md-6">
    <label for="inputAddress2">Addres</label>
    <input type="text" name="ADDRESS" class="form-control" id="inputAddress2" placeholder="Table,Home,class">
  <br>
</div>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnotes">Order Notes</label>
      <input type="text" name="NOTES" class="form-control" id="inputnotes">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputjumlah">Jumlah</label>
      <input type="number" name="Jumlah" class="form-control" id="inputjumlah">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Order</label>
      <select id="inputState" name="JENIS" class="form-control">
        <option selected>Choose Menu</option>

        <?php
        while ( $row =mysqli_fetch_assoc($result) ) :
        echo ('<option value="'.$row["ID_MENU"].'">'.$row["Jenis"].'</option>');
        endwhile; 
        ?>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  <button type="submit" name="submit" class="btn btn-danger">Process</button>
</form>
 
 </body>
 </html>