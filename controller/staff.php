<?php
require('db.php');


if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$address = $_POST['address'];
		$bday = $_POST['bday'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$insert = "INSERT INTO 
		staff 
		(
			fname,
			lname,
			mname,
			address,
			bday,
			username,
			password
		) 
		VALUES 
		(
			'$fname',
			'$lname',
			'$mname',
			'$address',
			'$bday',
			'$username',
			'$password'
		)";
		
		$qry = $conn->query($insert) or trigger_error(mysqli_error($conn)." ".$insert);

		if($qry){
			session_start();
			$_SESSION['reg'] = "Staff Registered successfully!";
			header("location:../add_staff.php");
		}
		else{
			echo "error backend";
		}
}




