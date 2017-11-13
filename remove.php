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
		<body bgcolor="blue">
            
<div class="full">
	<div class="nav">
	
			
			
		<nav class="nav navbar-fixed-top">
	
				
			
			
		<h2>Library Management</h2>
		
		  <div id="nav">
			<ul class="navbar-right">
					<li><a href="add.php">Add Books</a></li>
				<li><a href="index2.php">HOME</a></li>
					<li><a href="remove.php">Remove Books</a></li>
				</ul>
			</div>
		</nav>
		
	</div></div>
		<?php
		
		
		$sql = "SELECT * FROM books";
		$run = mysqli_query($conn,$sql);
		/*while($rows = mysqli_fetch_assoc($run) ) {
			echo $rows['name'];
		}*/
		echo "<table class='table' style='color:black;'>
				<thead>
					<tr>
						<th>S.no.</th>
						<th>Book Name</th>
						<th>Author Name</th>
						<th>Description</th>
						<th>total no</th>
						<th>available</th>
					</tr>
				</thead>
				<tbody>
		";
		
		while($rows = mysqli_fetch_assoc($run) ) {
			echo "<tr>
					<td>$rows[book_id]</td>
					<td>$rows[book_name]</td>
					<td>$rows[auther_name]</td>
					<td>$rows[disc]</td>
					<td>$rows[total_no]</td>
					<td>$rows[available]</td>
		<td><a href='remove.php?del_id=$rows[book_id]' class='btn btn-danger'>delete</a></td>
				</tr>				
					
			";
		}
		echo "</tbody></table>";
	?>
	</body>
	<?php
	if(isset($_GET['del_id']) ) {
		$del = "DELETE FROM books WHERE book_id = '$_GET[del_id]' ";
		if(mysqli_query($conn,$del)){
			?>
			<script>window.location="remove.php";</script>
			<?php
		
	}
	}
?>
</html>