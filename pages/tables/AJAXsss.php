<?php
	require_once('../../connect/connect.php');
	$roomname=$_REQUEST['Roomname'];
	$Placesname=mysqli_real_escape_string($link,$_REQUEST['Placesname']);
	$sales9 ="SELECT Distinct IDs FROM `rooms` where RoomName='".$roomname."'and HotelName='".$Placesname."' ";
	$result9=mysqli_query($link,$sales9);
	if($row9=mysqli_fetch_assoc($result9)){
	 echo $row9['IDs'];
	}else{
		echo $Placesname;
	}
	
?>