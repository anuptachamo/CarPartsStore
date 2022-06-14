<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];

	// database connection
	$conn = new mysqli('localhost','root','','carpartsstore');
	if($conn->connect_error){
		die('Connection failed  : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into customer(fname, lname, mobile, email, street, city, state)
								values(?,?,?,?,?,?,?)")
		$stmt->bind_param("sssssss", $fname, $lname, $mobile, $email, $street, $city, $state);
		$stmt->execute();
		echo "submit successfully..";
		$stmt->close;
		$conn->close;

	}
?>