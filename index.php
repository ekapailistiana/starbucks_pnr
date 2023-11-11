<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Silahkan Login Terlebih Dahulu</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<br>
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<br>
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
				<a class="link" href="https://www.malasngoding.com">kembali</a>
		</form>
		
	</div>
 
 
</body>
</html>