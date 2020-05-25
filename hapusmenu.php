<?php 
require 'function.php';

$id = $_GET["ID_MENU"];
if ( hapusmenu($id) > 0 ) {
	echo "
<script>
	alert('data berhasil dihapus');
	document.location.href = 'pesanmenu.php';
</script>

";

} else{
echo 
 "
<script>
	alert('data gagal dihapus');
	document.location.href = 'pesanmenu.php';
</script>
";
} 
 ?>