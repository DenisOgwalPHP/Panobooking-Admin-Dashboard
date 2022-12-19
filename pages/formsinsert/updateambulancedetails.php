<?php
session_start();
if (isset($_SESSION['panobookingadminuser'])) {
} else {
}

if (isset($_REQUEST['updatedetails'])) {
	// getting inputs from the form	
	$realvalue = $_POST['realvalue'];
	$productoption = $_POST['taxioption'];
	$productnames = $_POST['taxi'];
	require_once('../../connect/connect.php');
	if ($productoption == "Car Specifications") {
		$query = "UPDATE `ambulances` SET CarSpec='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "'";
	} else if ($productoption == "Ratings") {
		$query = "UPDATE `ambulances` SET Ratings='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "'";
	} else if ($productoption == "Driver Name") {
		$query = "UPDATE `ambulances` SET DriverName='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "'";
	} else if ($productoption == "Driver Age") {
		$query = "UPDATE `ambulances` SET DriverAge='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "'";
	} else if ($productoption == "Rental Price") {
		$realvalues = $_POST['realvalue']+(0.05*$_POST['realvalue']);
		$query = "UPDATE `ambulances` SET Price='" . $realvalues . "' WHERE TaxiNo='" . $productnames . "'";
	} else if ($productoption == "Address") {
		$query = "UPDATE `ambulances` SET CurrentLocation='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "'";
	} else if ($productoption == "Email address") {
		$query = "UPDATE `ambulances` SET EmailAddress='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "'";
	} else if ($productoption == "Telephone No") {
		$query = "UPDATE `ambulances` SET TelephoneNumber='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "'";
	}
	$result4 = mysqli_query($link, $query);
	if ($result4) {
		echo '<script type="application/javascript">';
		echo 'alert("Ambulance successfully Updated");';
		echo 'window.location.href="../forms/AddAmbulance.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Ambulance Update Failed");';
		echo 'window.location.href="../forms/AddAmbulance.php";';
		echo '</script>';
	}
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Error occured and i am un able to correct it");';
	echo 'window.location.href="../forms/AddAmbulance.php";';
	echo '</script>';
	die;
}
