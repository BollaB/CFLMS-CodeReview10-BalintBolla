<?php
	require_once "actions/db_connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Big Library</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Big Library</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link" href="create.php">Add an item</a>
	    </div>
	  </div>
	</nav>

	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4 text-light text-center">Welcome!</h1>
	    <p class="lead text-white text-center">The Big Library is at your service</p>
	  </div>
	</div>
	
	<div class="container">
		<div class="row">
			
				<?php
					$sql = "SELECT * FROM media;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					
					if ($resultCheck >0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<div class=\"col-lg-4 col-md-6 col-sm-12\">
									<div class=\"card\" style=\"width: 18rem;\">
		  								<img src=".$row["image"]. " class=\"card-img-top\" alt=\"itemIMG\">
		  								<div class=\"card-body\">
		    								<h5 class=\"card-title\">".$row["title"]. "</h5>
		    								<ul class=\"list-group list-group-flush\">
											    <li class=\"list-group-item small\">".$row["description"]. "</li>
											    <li class=\"list-group-item\">".$row["author_fname"]. " ".$row["author_lname"]."</li>
											    <li class=\"list-group-item\">".$row["media_type"]. "</li>
											    <li class=\"list-group-item font-weight-bold\">".$row["availability"]. "</li>
											 </ul>
		    								<a href='update.php?id=".$row["id"]." ' class=\"btn btn-info stretched-link\">Edit</a>
		    								<a href='delete.php?id=".$row["id"]." ' class=\"btn btn-danger stretched-link\">Delete</a>
		  								</div>
		  								
									</div>
								</div>";
								
						}
					}

				?>
			
		</div>
	</div>




	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>