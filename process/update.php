<?php
    include('dbconnect.php');
	
    $_POST = json_decode(file_get_contents('php://input'), true);

        $id = $_POST['id'];

        $username = $_POST['username'];

        $email = $_POST['email'];

        $mobile = $_POST['mobile'];

        $task = $_POST['task'];
  
        $task_type = $_POST['task_type'];

    $query = "UPDATE `user` SET `username`='$username',`email`='$email',`mobile`='$mobile',`task`='$task',`task_type`='$task_type' WHERE id='$id'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_affected_rows($con);

    echo $json_response = json_encode($rows);
?>