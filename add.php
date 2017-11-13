<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html>
		<head>
			<title>Library Management</title>
			<link rel="stylesheet"  href="css/bootstrap.css">
			<link rel="stylesheet"  href="css/signstyle.css">
			<link rel="stylesheet"  href="css/headfoot.css">
			<link rel="stylesheet"  href="css/font-awesome.css">
			<script src="js/jquery.js"></script>
			<script src="js/fix.js"></script>
			<script src="js/bootstrap.js"></script>

		</head>
	<body>
		<div class="nav">	
		<nav class="nav navbar-fixed-top">
		<h2>Library Management</h2>
		  <div id="nav">
			<ul class="navbar-right">
					<li><a href="index2.php">Home</a></li>
					<li><a href="remove.php">Remove Books</a></li>
				</ul>
			</div>
		</nav>
		<header>
			<div class="container">
				<center> <h1>Add more Books<h1></center>
				<form method="post" class="signform">
				<div
				<div class="form-group">
				<label> Book Name </label>
				<input class="form-control" type="text" name="bookName" required />
				</div>
				<div class="form-group">
				<label> Author Name </label>
				<input class="form-control" type="text" name="authorName" required />
				</div>
			<div class="form-group">
				<label> description </label>
				<input class="form-control" type="text" name="description" />
				</div>
			<div class="form-group">
				<label> Total number of books </label>
				<input class="form-control" type="text" name="totalNumber" required />
				</div>
			<div class="form-group">
				<label> No. of books issued </label>
				<input class="form-control" type="text" name="issue" required />
				</div>
			<div class="form-group">
				<label> No. of books available </label>
				<input class="form-control" type="text" name="available" required />
				</div>	
				<button class="btn btn-primary" name="add">Add book</button>
				</form>
			</header>
		</div>
		
	</body>
	<?php
	if(isset($_POST['add']) ){
		echo $book_name=$_POST['bookName'];
		echo $author_name= $_POST['authorName'];
		echo $description= $_POST['description'];
		echo $total_no= $_POST['totalNumber'];
		echo $issue= $_POST['issue'];
		echo $available= $_POST['available'];
		
		$ins_sql = "INSERT INTO books (book_name, auther_name, disc, total_no, book_issue, available) VALUES('$book_name', '$author_name', '$description', '$total_no', '$issue', '$available')";
		if(mysqli_query($conn,$ins_sql)){	?>
		<script>window.location = "add.php";</script>
	<?php
	}}?>
</html>