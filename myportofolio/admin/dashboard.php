<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header("location:login_admin.php");
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Admin</title>
 </head>
 <body>
 	<h1>Selamat Datang Kembali <?php echo $_SESSION ['username']; ?></h1>
 <span class="welcome">Dashboard Admin</span><br>
 <label>
 <a href="../index.html">Keluar</a>
 </label>
 </body>
 </html>