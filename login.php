<?php
require 'function.php';
session_start();

if(isset($_POST["login"])){
	$email = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE
		Email = '$email'" );


	if(mysqli_num_rows($result) == 1 ){
		$row = mysqli_fetch_assoc($result);
	if ($password==$row["Password"]){
		if($row['level']=="admin"){
			header("Location: kasir.php");
			$_SESSION["level"]=$row['level'];
			$_SESSION["Email"]=$row['Email'];
			$_SESSION["ID_User"]=$row['ID_User'];
		}
		elseif($row['level']=="member"){
			header("Location: index.php");
			$_SESSION["level"]=$row['level'];
			$_SESSION["Email"]=$row['Email'];
			$_SESSION["ID_User"]=$row['ID_User'];
		}

	exit;
	}
	else{
		$error=true;
	}
}
else{
	$error=true;
}
}
	$error=false;
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Login</title>
	<link rel="stylesheet"  href="style.css">

</head>
<body>
	<body style="background-color: orange";>

	<div class="loginbox">
	<h1>Halaman Login</h1>
	<?php if ($error=='true') : ?>
		<p style="color: red; font-style: italic; ">Username/Password salah</p>
	<?php endif; ?>
	<form action="" method="post">
		<ul>
			<li>
				<label for="email">Email</label>
				<br>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="password">Password</label>
				<br>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>

	</form>
</div>
</body>
</html>
