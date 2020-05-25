<?php 
$conn = mysqli_connect("localhost", "root", "", "cateringku1");
$result = mysqli_query($conn,"SELECT pemesanan.ID_PESAN, pemesanan.ADDRES, pemesanan.FIRST_NAME, pemesanan.LAST_NAME, pemesanan.NOTES, pemesanan.JUMLAH, menu.Jenis FROM pemesanan INNER JOIN menu on pemesanan.ID_MENU = menu.ID_MENU");
$i=1;
require "headerkasir.php";
require 'verify_admin.php';

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Kasir</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body style="background-color: #ffe066;">
  <div>
 <h1 class="mid">DAFTAR PESANAN</h1>
 <table class="mx-auto mid"  border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th bgcolor="blue">NO</th>
    <th bgcolor="blue">Hapus</th>
    <th bgcolor="blue">Address</th>
    <th bgcolor="blue">Firstname</th>
    <th bgcolor="blue">Lastname</th>
    <th bgcolor="blue">Order Notes</th>
    <th bgcolor="blue">Jenis Makanan</th>
    <th bgcolor="blue">Jumlah</th>
  </tr>
    <?php while ( $row =mysqli_fetch_assoc($result) ) : ?>
    <tr>
      <th><?= $i; ?></th>
      <th>
        <a href="hapus.php?ID_PESAN=<?= $row["ID_PESAN"]; ?>">Hapus</a>
      </th>
      <th><?= $row["ADDRES"]; ?></th>
      <th><?= $row["FIRST_NAME"]; ?></th>
      <th><?= $row["LAST_NAME"]; ?></th>
      <th><?= $row["NOTES"]; ?></td>
      <th><?= $row["Jenis"]; ?></td>
      <th><?= $row["JUMLAH"]; ?></th>

    </tr>
    </div>
   <?php $i++; endwhile; ?>
 </table>
 </body>
 </html>