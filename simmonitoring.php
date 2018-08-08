<?php  
include('includes/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sim Monitoring</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<script src="assets/js/script.js"></script>
	<div class="container">
		<h1>Sim Monitoring</h1>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Add Sim Account</h4>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<form role="form" method="POST" action="simmonitoring.php">
						<label>Sim Number</label>
						<input type="text" name="simId" id="simId" class="form-control" placeholder="Primary Number"><br/>
						<label>Directory</label>
						<input type="text" name="directoryId" id="directoryId" class="form-control" placeholder="Directory"><br/>
						<label>Receiver Name</label>
						<input type="text" name="receiver" class="form-control" placeholder="Receiver"><br/>
						<label>Date Released</label>
						<input type="date" name="date" class="form-control" placeholder="Date Released"><br/>

						<input type="submit" name="btnsave" id="save" class="btn btn-success" value="Save">
						<input type="reset" name="cancel" class="btn btn-default" value="Cancel">
					</form>
				</div>
			</div>
		</div>

		<div class="table table-reponsive">
			<table class="table table-bordered table-striped">
				<th>Primary Number</th>
				<th>Account Number</th>
				<th>Directory</th>
				<th>Area</th>
				<th>Action</th>
			</table>
		</div>

	</div>
	

</body>
</html>