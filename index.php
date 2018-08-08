<?php 
	
	include('includes/connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Monitoring</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>

				</button>
				<a class="navbar-brand" href="#">Monitoring</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li><a href="<#">Share</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>	
				</ul>
				
			</div>
		</div>
	</nav>
	<div class="container">
		
		<h1>Sim Monitoring</h1>

		<div class="form-group">
			<button  class="btn btn-success">Add New</button><br/><br/>
			<form class="form form-inline">
				<input type="text" name="txtsearch" class="form-control right">
				<input type="button" name="txtsearch" class="btn btn-success right" value="search">
			</form>
		</div>
		<div class="table table-responsive">
			<table class="table table-bordered table-striped">
				<th>Subscriber</th>
				<th>IMEI</th>
				<th>Account</th>
				<th>Primary Number</th>
				<th>Description</th>
				<th>Action</th>
				<?php  
					$query=mysqli_query($connection,"select * from siminventory limit 50");
					$rows=mysqli_num_rows($query);
					for ($i=1; $i < $rows; $i++) { 
						$fetch=mysqli_fetch_assoc($query);
				?>
					<tr>
						<td><?php echo $fetch['Subscriber']; ?></td>
						<td><?php echo $fetch['IMEI']; ?></td>
						<td><?php echo $fetch['Account']; ?></td>
						<td><?php echo $fetch['PrimaryNumber']; ?></td>
						<td><?php echo $fetch['Description']; ?></td>
						<td>
							<button class="btn btn-info">Edit</button>
							<button class="btn btn-danger">Delete</button>
						</td>
					</tr>	
				<?php

					}
				?>
			</table>
		</div>
	</div>
</body>
</html>