<?php
	header('Access-Control-Allow-Origin: *');
	require 'includes/db_connect.php';

	$fullName = $_POST['fullName'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$dateOfMissing = $_POST['dom'];
	$info = $_POST['info'];
	$path =  "http://127.0.0.1/missing/img/";
	$image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name']
    $path2 = $path.$image_name;
    $insert = "INSERT INTO missing_pers (name,gender,age,image_path,date_missing,info) VALUES ($name,$gender,$age,$path2,$dateOfMissing,$info)";
    $result = mysqli_query($conn,$insert);
    if($result && move_uploaded_file($image_tmp_name, $path)){
    	echo json_encode(array("status" => "done"));
    }
    else{
    	echo mysqli_error($conn);

    }
?>