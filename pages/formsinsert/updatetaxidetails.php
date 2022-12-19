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
		$query = "UPDATE `carrentals` SET CarSpec='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Ratings") {
		$query = "UPDATE `carrentals` SET Ratings='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Driver Name") {
		$query = "UPDATE `carrentals` SET DriverName='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Driver Age") {
		$query = "UPDATE `carrentals` SET DriverAge='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Rental Price") {
		$realvalues = $_POST['realvalue']+(0.05*$_POST['realvalue']);
		$query = "UPDATE `carrentals` SET Price='" . $realvalues . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Address") {
		$query = "UPDATE `carrentals` SET CurrentLocation='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Email address") {
		$query = "UPDATE `carrentals` SET EmailAddress='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	} else if ($productoption == "Telephone No") {
		$query = "UPDATE `carrentals` SET TelephoneNumber='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
		
	} else if ($productoption == "Rental Price Upcountry") {
		$realvalues = $_POST['realvalue']+(0.05*$_POST['realvalue']);
		$query = "UPDATE `carrentals` SET PricePerDay='" . $realvalues . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	}
	else if ($productoption == "No Of Passengers") {
		$query = "UPDATE `carrentals` SET Passengers='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	}
	else if ($productoption == "No Of Doors") {
		$query = "UPDATE `carrentals` SET Doors='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	}
	else if ($productoption == "Description") {
		$query = "UPDATE `carrentals` SET Description='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	}else if ($productoption == "Category") {
		$query = "UPDATE `carrentals` SET CarCategory='" . $realvalue . "' WHERE TaxiNo='" . $productnames . "' and DriverName='".$CompanyName."'";
	}
	$result4 = mysqli_query($link, $query);
	if ($result4) {
		echo '<script type="application/javascript">';
		echo 'alert("Car Details successfully Updated");';
		echo 'window.location.href="../forms/AddCars.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Car Details Update Failed");';
		echo 'window.location.href="../forms/AddCars.php";';
		echo '</script>';
	}
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Error occured and i am un able to correct it");';
	echo 'window.location.href="../forms/AddCars.php";';
	echo '</script>';
	die;
}
