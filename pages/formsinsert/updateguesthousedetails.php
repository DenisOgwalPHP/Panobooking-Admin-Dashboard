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
	if ($productoption == "Country") {
		$query = "UPDATE homeguesthouses` SET Country='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	} else if ($productoption == "City") {
		$query = "UPDATE `homeguesthouses` SET City='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	} else if ($productoption == "Destination Place") {
		$query = "UPDATE `homeguesthouses` SET Place='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	} else if ($productoption == "Place Ratings") {
		$query = "UPDATE `homeguesthouses` SET Rating='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	} else if ($productoption == "Least Price") {
		$realvalues = $_POST['realvalue']+(0.05*$_POST['realvalue']);
		$query = "UPDATE `homeguesthouses` SET Prices='" . $realvalues . "' WHERE GuestHouseName='" . $productnames . "'";
	} else if ($productoption == "Least Price Short Description") {
		$query = "UPDATE `homeguesthouses` SET PriceSpecifications='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	} else if ($productoption == "Comment") {
		$query = "UPDATE `homeguesthouses` SET Comment='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	} else if ($productoption == "Email address") {
		$query = "UPDATE `homeguesthouses` SET EmailAddress='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	}else if ($productoption == "Telephone No") {
		$query = "UPDATE `homeguesthouses` SET TelephoneNumber='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	}else if ($productoption == "Exact Location") {
		$query = "UPDATE `homeguesthouses` SET ExactLocation='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	}else if ($productoption == "Coordinates") {
		$query = "UPDATE `homeguesthouses` SET Coordinates='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	}else if ($productoption == "Facilities") {
		$query = "UPDATE `homeguesthouses` SET Facilities='" . $realvalue . "' WHERE GuestHouseName='" . $productnames . "'";
	}
	$result4 = mysqli_query($link, $query);
	if ($result4) {
		echo '<script type="application/javascript">';
		echo 'alert("Guest House successfully Updated");';
		echo 'window.location.href="../forms/AddGuestHouses.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Guest House Update Failed");';
		echo 'window.location.href="../forms/AddGuestHouses.php";';
		echo '</script>';
	}
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Error occured and i am un able to correct it");';
	echo 'window.location.href="../forms/AddGuestHouses.php";';
	echo '</script>';
	die;
}
