<?php
	require_once('../../connect/connect.php');
	$propertytype=$_REQUEST['SelectType'];
	$rooms=$_REQUEST['selectrooms'];
	$hotelname=mysqli_real_escape_string($link,$_REQUEST['selectproperty']);
	if($propertytype=="Stays"){
	$sales9 ="SELECT Distinct Price FROM `rooms` where HotelName='".$hotelname."' and RoomName='".$rooms."'";
	$result9=mysqli_query($link,$sales9);
	while($row9=mysqli_fetch_assoc($result9)){
	echo $row9['Price'];
	}
	}else if($propertytype=="Rental Cars"){
	$sales9 ="SELECT Distinct  PricePerDay FROM `carrentals` where DriverName='".$hotelname."' and TaxiNo='".$rooms."'";
	$result9=mysqli_query($link,$sales9);
	while($row9=mysqli_fetch_assoc($result9)){
	echo $row9['PricePerDay'];
	}
	}else if($propertytype=="Airport Taxis"){
	$sales9 ="SELECT Distinct PricePerDay FROM `airporttaxi` where TaxiNo='".$hotelname."'";
	$result9=mysqli_query($link,$sales9);
	while($row9=mysqli_fetch_assoc($result9)){
	echo $row9['PricePerDay'];
	}
	}else if($propertytype=="Ambulances"){
	$sales9 ="SELECT Distinct Price  FROM `ambulances` where DriverName='".$hotelname."' and TaxiNo='".$rooms."'";
	$result9=mysqli_query($link,$sales9);
	while($row9=mysqli_fetch_assoc($result9)){
	 echo $row9['Price'];
	}
	}
?>