<?php
	require 'includes/head.php';
	require 'includes/nav.php';
?>
<body>
	<div class="container-fluid">
		<div class="jumbotron col-md-12 col-xs-12 col-sm-10">

			<?php
				require 'includes/db_connect.php';
				$name = $_GET['id'];
				$values = array();
				$findPerson = "SELECT * FROM missing_pers WHERE name LIKE '$name%'";
				$findResult = mysqli_query($conn,$findPerson);
				$rowCount = mysqli_num_rows($findResult);
				if($rowCount == 0){
					echo "No Results Found<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
				}
				else{
					while ($row = mysqli_fetch_assoc($findResult)) {
						
							echo '<div class="w3-card w3-card-4 display w3-light-grey col-md-3 col-md-offset-1 col-xs-12">';
							echo '<img src="'.$row["image_path"].'" class="img-thumbnail img-responsive person">';
							echo '<div class="info">
									<strong>
										<h3>Name: '.$row['name'].'</h3>
										<h4>Date of Missing: '.$row['date_missing'].'</h4>
									</strong>					
								  </div>
								</div>';
					}
				}
			?>
		</div>
	</div>
<?php
	require 'includes/footer.php';
?>
