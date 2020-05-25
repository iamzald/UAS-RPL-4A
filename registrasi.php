<?php 
require 'function.php';
if (isset($_POST["register"]))
{
	if ( registrasi($_POST) > 0 ) {
		echo "<script>
	alert('User berhasil ditambahkan');
	document.location.href = 'login.php';
			</script>";
	}

	else {
		echo mysqli_error($conn);

	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Halaman registrasi</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for "email">email :</label>
			<input type="text" name="email" id="email">
		
		</li>
		<li>
			<label for "password">password :</label>
			<input type="password" name="password" id="password">
		
		</li>
		<li>
			<label for "password2">Konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
		</li>
		<li>
			<button type="submit" name="register">Registrasi</button>
		</li>
	</ul>	

</form>
</body>
</html>