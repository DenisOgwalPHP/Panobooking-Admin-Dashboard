<?php
	$propertytype=$_REQUEST['SelectType'];
	require_once('../../connect/connect.php');
	if($propertytype=="Rental Cars"){
	$sales9 ="SELECT Distinct DriverName FROM `carrentals`";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="">Select Car Owner</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['DriverName'].'">'.$row9['DriverName'].'</option>';
	}
	}else if($propertytype=="Stays"){
	$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="">Select Property</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
	}
	}else if($propertytype=="Airport Taxis"){
	$sales9 ="SELECT Distinct TaxiNo  FROM `airporttaxi`";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="">Select Taxi</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['TaxiNo'].'">'.$row9['TaxiNo'].'</option>';
	}
	}
	else if($propertytype=="Ambulances"){
	$sales9 ="SELECT Distinct TaxiNo  FROM `ambulances`";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="">Select Ambulance</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['TaxiNo'].'">'.$row9['TaxiNo'].'</option>';
	}
	}
?>