<?php
	$carcompany=$_REQUEST['CompanyName'];
	require_once('../../connect/connect.php');
	$sales9 ="SELECT Distinct TaxiNo FROM `carrentals` where DriverName='".$carcompany."'";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value=""></option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['TaxiNo'].'">'.$row9['TaxiNo'].'</option>';
	}
	
?>