<?php
session_start();
require('db.php');

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$chck_post = "SELECT * FROM assessor_admin WHERE username = '$username' AND password = '$password'";
	$qry = $conn->query($chck_post) or trigger_error(mysqli_error($conn)." ".$chck_post);

	if(mysqli_num_rows($qry) > 0){
		header("location:../dashboard.php");
	}
	else{
		$_SESSION['err'] = "Wrong Username or Password";
		header("location:../index.php");
	}
}