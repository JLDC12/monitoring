<?php  
	include('includes/connection.php');

	if(isset($_POST['btnsave'])){
		$sim=$_POST['txtsubscriber'];
		$imei=$_POST['txtIMEI'];
		$acctnumber=$_POST['txtAcctnumber'];
		$number=$_POST['txtprimarynumber'];
		$userId='1';
		$description=$_POST['txtdescription'];
		$plan=$_POST['txtplan'];
		$date=$_POST['txtdate'];

		mysqli_query($connection,"insert into siminventory(`userId`,`subscriber`,`IMEI`, `Account`, `PrimaryNumber`, `Description`, `PLAN`, `PurchaseDate`)values('$userId','$sim','$imei','$acctnumber','$number','$description','$plan','$date')")or die(mysqli_error($connection));
	}
	if(){}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Sim</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Add Sim</h1>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h4>Add Sim Information</h4>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<form role="form" method="post" action="simadd.php">
						<label>Subscriber</label>
						<input type="text" name="txtsubscriber" class="form-control" placeholder="Subscriber"><br/>
						<label>IMEI</label>
						<input type="number" name="txtIMEI" class="form-control" placeholder="IMEI"><br/>
						<label>Account Number</label>
						<input type="number" name="txtAcctnumber" class="form-control" placeholder="Account Number"><br/>
						<label>Primary Number</label>
						<input type="number" maxlength="11" name="txtprimarynumber" class="form-control" placeholder="Primary Number"><br/>
						<label>Description</label>
						<textarea name="txtdescription" class="form-control" placeholder="Description"></textarea> 
						<label>Plan</label>
						<input type="text" name="txtplan" class="form-control" placeholder="Plan"><br/>
						<label>Purchase Date</label>
						<input type="date" name="txtdate" class="form-control"><br/>

						<input type="submit" name="btnsave" class="btn btn-success" value="Save">
						<input type="reset" name="btncancel" class="btn btn-danger" value="Cancel">
					</form>
				</div>
			</div>
		</div>

		<div class="table table-responsive">
			<div class="well">
				<input type="text" name="txtsearch" Placeholder="Search" class="form-control" style="width:200px;padding-right:10px;">
			</div>
			
			<table class="table table-bordered table-striped">
				 <th>Subscriber</th>
				 <th>IMEI</th>
				 <th>Account Number</th>
				 <th>Primary Number</th>
				 <th>Description</th>
				 <th>Plan</th>
				 <th>Purchase Date</th>
				 <th>Action</th>
				 <?php  
				 	$sql=mysqli_query($connection,"select * from siminventory limit 10");
				 	$row=mysqli_num_rows($sql);

				 	for ($i=1; $i <=$row ; $i++) { 
				 		$fetch=mysqli_fetch_assoc($sql);
				 ?>
				 	<tr>
				 		<td><?php echo $fetch['Subscriber']; ?></td>
				 		<td><?php echo $fetch['IMEI']; ?></td>
				 		<td><?php echo $fetch['Account']; ?></td>
				 		<td><?php echo $fetch['PrimaryNumber']; ?></td>
				 		<td><?php echo $fetch['Description']; ?></td>
				 		<td><?php echo $fetch['PLAN']; ?></td>
				 		<td><?php echo $fetch['PurchaseDate']; ?></td>

				 		<td>
				 			<a href="#" class="btn btn-primary">Edit</a>
				 			<a href="#" class="btn btn-danger">Delete</a>	
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