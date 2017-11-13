<?php include "includes/db.php";?>
<!DOCTYPE html>
<html>
<head>
<title>
Library Management
</title>
<link rel="stylesheet"  href="css/bootstrap.css">
	<link rel="stylesheet"  href="css/lightbox.css">
	<link rel="stylesheet"  href="css/style.css">
	<link rel="stylesheet"  href="css/headfoot.css">
	<link rel="stylesheet"  href="css/font-awesome.css">
	<script src="js/jquery.js"></script>
	<script src="js/fix.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/bootstrap.js"></script>
	
</head>
<body background="img.jpg">
<?php include "includes/header.php"; ?>
<div class="Container">
	<header>
	<div class="text-center company-name col-md-6 col-md-offset-4" id="top">
			<h1>library Management</h1>
			
			<form class="form-inline" method="post" action="home.php">
			<div class="form-group">
				<input type="text" class="form-control" name="token" placeholder="search for the book"> 
				</div>
			<button class="btn btn-info" name="search"><span class='fa fa-search'></span></button>
			</form>
			</div>
			<div class="col-md-6 col-md-offset-3" style="margin-top:50px;">
				<?php
                
					if(isset($_POST['search'])){
						$search_key=$_POST['token'];
						$sql="select * from books where book_name LIKE '%$search_key%'";
						$result=mysqli_query($conn,$sql);
						echo "<table class='table'>
								<thead>
									<tr>
										<th>S No</th>
										<th>Book Name</th>
										<th>Author Name</th>
										<th>Total</th>
										<th>Available</th>
									</tr>
								</thead>
							<tbody>";
							$i=1;
                         
						while($row=mysqli_fetch_assoc($result)){
                           
                               
							echo "
								<tr>
									<td><font color=\"white\">".$i."</td>
									<td><b>".$row['book_name']."</b></td>
									<td><b>".$row['auther_name']."</b></td>
									<td><b><font color=\"white\">".$row['total_no']."</font></b></td>
									<td><b><font color=\"white\">".$row['available']."</font></b></td>
									<td><a href='isuue.php' class='btn btn-primary'>ISSUE</a></td>
							</font>";
							$i++;
                            
                       
                    
                        
						 " </tbody>
							</table>
						";
                            
                         
                    }
                            
                         
                             
                    }
                    
				?>
			</div>
			</header>
		
</div>
</body>

</html>