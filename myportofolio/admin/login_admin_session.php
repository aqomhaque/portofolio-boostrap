<?php 
session_start();
include '../lib/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tbl_admin WHERE username= '$username' AND password= '$password'";
$runquery = $koneksi->query($query);

if ($runquery->num_rows > 0) {
	$_SESSION['username'] = $username;
	header("location:dashboard.php");

}else{
	echo "Username atau Password salah!";
}



 ?>