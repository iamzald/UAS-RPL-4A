<?php 
require 'headerkasir.php';
require 'footer.php';
$conn = mysqli_connect("localhost", "root", "", "cateringku1");
$result = mysqli_query($conn,"SELECT * FROM menu");
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Menu</title>

</head>
<body style="background-color: #ffe066;">
	<div class="mx-auto mid">
<table border="1" cellpadding="10" cellspacing="0">
	 <tr>
    <th bgcolor="blue">GAMBAR</th>
    <th bgcolor="blue">Aksi</th>
    <th bgcolor="blue">NAMA</th>
    <th bgcolor="blue">HARGA</th>
  </tr>
	<?php while ( $row =mysqli_fetch_assoc($result) ) : ?>
		
<tr>
	<th><img src="gambar/<?=$row['gambar']?> " width="220"></th>
	 <th><a href="hapusmenu.php?ID_MENU=<?= $row["ID_MENU"]; ?>">Hapus</a>
      </th>
	<th><?= $row["Jenis"]?></th>
	<th><?= $row["Harga"]?></th>
   <?php  endwhile; ?>
</div>
</tr>
</table>
</body>
</html>