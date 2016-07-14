<?php
	require 'includes/db_connect.php';
	require 'includes/head.php';
	require 'includes/nav.php';
?>
<?php
	if(isset($_POST['submit'])){
		$error = "";
		$fullName = $_POST['fullName'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$tempName = $_FILES['image']['tmp_name'];
		$file = $_FILES['image']['name'];
		$dir = "img/";
		$dateOfMissing = $_POST['dom'];
		$info = $_POST['info'];
		if(move_uploaded_file($tempName, $dir . "/" . $file)){
			$imageUploaded = true;
		}
		else{
			$error = $_FILES['uploadedFile']['error'];
		}
		$path = $dir . $file;
		$insertQuery = "INSERT INTO missing_pers (name,gender,age,image_path,date_missing,info) VALUES ('$fullName', '$gender','$age','$path','$dateOfMissing','$info')";
		$insertResult = mysqli_query($conn,$insertQuery);
		if($insertResult){
			echo "DONE";
		}
		else{
			echo mysqli_error($conn);
		}
	}
	
	
?>
<head>
	<title>Post a missing person</title>
</head>
<body>
	<div class="container">
		<form id="postForm" action="" method="post" class="form-group" enctype="multipart/form-data">
	    	<label for="name">Full Name:</label>
	        <input type="text" class="form-control" name="fullName" id="fullName">
	        <label for="name">Age:</label>
	        <input type="number" maxlength="100" name="age" class="form-control" id="age">
	        <label for="name">Gender:</label>
	        <input type="radio" name="gender" value="male"><br>
	        <input type="radio" name="gender" value="female"><br>
	        <label for="name">Image</label>
	        <input type="file" name="image" class="form-control" id="image"><br>  
	        <label for="name">Date of Missing:</label>
	        <input type="date" name="dom" class="form-control" id="date">
	        <label for="name">General Information</label>
	        <textarea type="text" name="info" class="form-control" id="info"></textarea>
	        <button class="btn btn-success" name="submit" id="submit">Submit</button>
	   	</form>
	</div>
<?php
	require 'includes/footer.php';
?>
