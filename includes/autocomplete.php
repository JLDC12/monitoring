<?php  
	include('connection.php');

	$autocomplete=$_GET['simId'];

	$sql=mysqli_query($connection,"select * from siminventory where primarynumber like %".."%")or die(msqli_error($connection));
	


?>