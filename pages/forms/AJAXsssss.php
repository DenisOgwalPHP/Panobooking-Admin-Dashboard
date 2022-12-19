<?php
	require_once('../../connect/connect.php');
	$propertytype=$_REQUEST['SelectType'];
	$hotelname=mysqli_real_escape_string($link,$_REQUEST['selectpropertys']);
	if($propertytype=="Stays"){
	$sales9 ="SELECT Distinct RoomName FROM `rooms` where HotelName='".$hotelname."'";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="">Select Room</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['RoomName'].'">'.$row9['RoomName'].'</option>';
	}
	}else if($propertytype=="Rental Cars"){
	$sales9 ="SELECT Distinct TaxiNo FROM `carrentals` where DriverName='".$hotelname."'";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="">Select Car</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['TaxiNo'].'">'.$row9['TaxiNo'].'</option>';
	}
	}else if($propertytype=="Airport Taxis"){
	$sales9 ="SELECT Distinct TaxiNo FROM `airporttaxi` where TaxiNo='".$hotelname."'";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="">Select Taxi</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['TaxiNo'].'">'.$row9['TaxiNo'].'</option>';
	}
	}else if($propertytype=="Ambulances"){
	$sales9 ="SELECT Distinct TaxiNo  FROM `ambulances` where DriverName='".$hotelname."'";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value="">Select Ambulance</option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['TaxiNo'].'">'.$row9['TaxiNo'].'</option>';
	}
	}
?>