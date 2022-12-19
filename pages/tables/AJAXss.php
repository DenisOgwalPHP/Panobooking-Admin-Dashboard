<?php
	require_once('../../connect/connect.php');
	$hotelname=mysqli_real_escape_string($link,$_REQUEST['Placesname']);
	$sales9 ="SELECT Distinct RoomName FROM `rooms` where HotelName='".$hotelname."'";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value=""></option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['RoomName'].'">'.$row9['RoomName'].'</option>';
	}
	
?>