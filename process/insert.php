<?php
	
	include('dbconnect.php');

	$_POST = json_decode(file_get_contents('php://input'), true);
	$username = $_POST['username'];
  	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	
	echo $username;
	echo $email;
	echo $mobile;
	
	echo $query = "INSERT INTO `user`(`username`, `email`, `mobile`) VALUES ('$username', '$email', '$mobile')";
	$result = mysqli_query($con,$query);
    $rows = mysqli_affected_rows($con);

	echo $json_response = json_encode($rows);

?>