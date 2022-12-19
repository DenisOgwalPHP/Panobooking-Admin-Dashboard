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
	$CompanyName = $_POST['CompanyName'];
	require_once('../../connect/connect.php');
	if ($productoption == "Car Specifications") {
		$query = "UPDATE `airporttaxi` SET CarSpec='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Ratings") {
		$query = "UPDATE `airporttaxi` SET Ratings='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Driver Name") {
		$query = "UPDATE `airporttaxi` SET DriverName='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Driver Age") {
		$query = "UPDATE `airporttaxi` SET DriverAge='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Rental Price") {
		$realvalues = $_POST['realvalue']+(0.05*$_POST['realvalue']);
		$query = "UPDATE `airporttaxi` SET Price='" . $realvalues . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Address") {
		$query = "UPDATE `airporttaxi` SET CurrentLocation='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Email address") {
		$query = "UPDATE `airporttaxi` SET EmailAddress='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Telephone No") {
		$query = "UPDATE `airporttaxi` SET TelephoneNumber='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Rental Price Upcountry") {
		$query = "UPDATE `airporttaxi` SET PricePerDay='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	}
	$result4 = mysqli_query($link, $query);
	if ($result4) {
		echo '<script type="application/javascript">';
		echo 'alert("Taxi Details successfully Updated");';
		echo 'window.location.href="../forms/AddTaxis.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Taxi Details Update Failed");';
		echo 'window.location.href="../forms/AddTaxis.php";';
		echo '</script>';
	}
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Error occured and i am un able to correct it");';
	echo 'window.location.href="../forms/AddTaxis.php";';
	echo '</script>';
	die;
}
