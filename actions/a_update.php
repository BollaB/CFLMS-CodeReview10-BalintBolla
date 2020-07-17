<!DOCTYPE html>
<html>
<head>
	<title>Edit Item</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../style.css">
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
	      <a class="nav-item nav-link" href="#">Add an item</a>
	    </div>
	  </div>
	</nav>

	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4 text-light text-center">Welcome!</h1>
	    <p class="lead text-white text-center">The Big Library is at your service</p>
	  </div>
	</div>


		<?php
		require_once "db_connect.php";

		if($_POST){
			$id = $_POST["id"];
			$title = $_POST["title"];
			$image = $_POST["image"];
			$isbn = $_POST["ISBN"];
			$description = $_POST["description"];
			$pDate = $_POST["publish_date"];
			$pName = $_POST["publisher_name"];
			$pAddress = $_POST["publisher_address"];
			$pSize = $_POST["publisher_size"];
			$mType = $_POST["media_type"];
			$availability = $_POST["availability"];
			$aFName = $_POST["author_fname"];
			$aLName = $_POST["author_lname"];

			$sql = "UPDATE `media` SET `title`='$title',`image`='$image',`ISBN`='$isbn',`description`='$description',`publish_date`='pDate',`publisher_name`='$pName',`publisher_address`='$pAddress',`publisher_size`='$pSize',`media_type`='$mType',`availability`='$availability',`author_fname`='$aFName',`author_lname`='$aLName' WHERE id = $id";

			if(mysqli_query($conn, $sql)){

				echo "<div class=\"alert alert-success text-center\" role=\"alert\">
							  <h4 class=\"alert-heading\">Well done!</h4>
							  <p>You successfully edited an item in our catalogue. You can check it out by clicking on the link below.</p>
							  <hr>
							  <a href='../index.php'>Back to the Homepage</a></p>
							</div>";
			}else {
				echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
							  <strong>Holy guacamole!</strong> Something went wrong.
							  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
							    <span aria-hidden=\"true\">&times;</span>
							  </button>
							</div>";
			}
		}
	?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

