<?php 
require 'function.php';

$id = $_GET["ID_PESAN"];
if ( hapus($id) > 0 ) {
	echo "
<script>
	alert('data berhasil dihapus');
	document.location.href = 'kasir.php';
</script>

";

} else{
echo 
 "
<script>
	alert('data gagal dihapus');
	document.location.href = 'kasir.php';
</script>
";
} 
 ?>
