<?php
	require_once "actions/db_connect.php";

	if($_GET["id"]){
		$id = $_GET["id"];

		$sql = "SELECT * FROM media WHERE id = $id";
		$result = mysqli_query($conn, $sql);

		$row = $result->fetch_assoc();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Item</title>

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


	<div class="container">
			<form action="actions/a_update.php" method="post">
				<input type="hidden" value ="<?php echo $row['id'] ?>" name="id">
			  <div class="form-group">
			    <label for="titleInput">Title</label>
			    <input type="text" class="form-control" id="titleInput" name="title" value="<?php echo $row['title'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="imageInput">Image</label>
			    <input type="text" class="form-control" id="imageInput" name="image" value="<?php echo $row['image'] ?>" aria-describedby="imageHelp">
			    <small id="imageHelp" class="form-text text-dark">*Please add the http link to the image.</small>
			  </div>
			  <div class="form-group">
			    <label for="isbnInput">ISBN</label>
			    <input type="text" class="form-control" id="isbnInput" name="ISBN" value="<?php echo $row['ISBN'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="descriptionTextarea">Description</label>
			    <textarea class="form-control" id="descriptionTextarea" name="description" value="<?php echo $row['description'] ?>" rows="5"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="publishdateInput">Date of publication</label>
			    <input type="date" class="form-control" id="publishdateInput" name="publish_date" value="<?php echo $row['publish_date'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="pNameInput">Publisher</label>
			    <input type="text" class="form-control" id="pNameInput" name="publisher_name" value="<?php echo $row['publisher_name'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="pAddressInput">Address of Publisher</label>
			    <input type="text" class="form-control" id="pAddressInput" name="publisher_address" value="<?php echo $row['publisher_address'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="pSize">Publisher size</label>
			    <select class="form-control" id="pSize" name="publisher_size" value="<?php echo $row['publisher_size'] ?>">
			      <option>Big</option>
			      <option>Medium</option>
			      <option>Small</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="mType">Media type</label>
			    <select class="form-control" id="mType" name="media_type" value="<?php echo $row['media_type'] ?>">
			      <option>Book</option>
			      <option>CD</option>
			      <option>DVD</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="availability">Availability</label>
			    <select class="form-control" id="availability" name="availability" value="<?php echo $row['availability'] ?>">
			      <option>Available</option>
			      <option>Reserved</option>
			    </select>
			  </div>
			   <div class="form-group">
			    <label for="aFNameInput">Author Firstname</label>
			    <input type="text" class="form-control" id="aFNameInput" name="author_fname" value="<?php echo $row['author_fname'] ?>">
			  </div>
			   <div class="form-group">
			    <label for="aLNameInput">Author Lastname</label>
			    <input type="text" class="form-control" id="aLNameInput" name="author_lname" value="<?php echo $row['author_lname'] ?>">
			  </div>
			  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
			</form>
		</div>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>