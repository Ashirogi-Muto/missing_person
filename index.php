<?php
	require 'includes/head.php';
	require 'includes/nav.php';
	require 'includes/db_connect.php';
?>
<body>


	<div class="container-fluid">
		<div class="jumbotron">
			<h2>Information on missing persons</h2>
		</div>
		<?php
			$fetchRandom = "SELECT * FROM missing_pers ORDER BY RAND() LIMIT 6";
			$randomResult  = mysqli_query($conn,$fetchRandom);
			while($row = mysqli_fetch_assoc($randomResult)){
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
		?>
	</div>
<?php
	require 'includes/footer.php';
?>