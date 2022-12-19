<?php
	require_once('../../connect/connect.php');
	$hotelname=mysqli_real_escape_string($link,$_REQUEST['Placesname']);
	$sales9 ="SELECT Distinct PackageName FROM `tourpackage` where TravelCompany='".$hotelname."'";
	$result9=mysqli_query($link,$sales9);
	 echo '<option value=""></option>';
	while($row9=mysqli_fetch_assoc($result9)){
	 echo '<option value="'.$row9['PackageName'].'">'.$row9['PackageName'].'</option>';
	}
	
?>