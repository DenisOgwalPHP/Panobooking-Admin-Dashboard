<?php session_start();
if (isset($_SESSION['panobookingadminuser'])) {
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Login First");';
	echo 'window.location.href="../../index.php";';
	echo '</script>';
}
if (isset($_REQUEST['destinationssubmit'])) {
	require_once('../../connect/connect.php');
	// getting inputs from the form	
	$country = mysqli_real_escape_string($link,$_POST['country']);
	$city = mysqli_real_escape_string($link,$_POST['city']);
	$region =  mysqli_real_escape_string($link,$_POST['region']);
	$place = mysqli_real_escape_string($link,$_POST['place']);
	$place2=$_POST['place'];
	$placetype=$_POST['placetype'];
	$ratings = $_POST['ratings'];
	$leastprice = $_POST['leastprice'];
	$leastpricedes = mysqli_real_escape_string($link,$_POST['leastpricedes']);
	$leastpricecom = $_POST['leastpricecom'];
	$paymentoption = $_POST['paymentoption'];
	$emailaddress = $_POST['emailaddress'];
	$maps=$_POST['maps'];
	$phone = $_POST['phone'];
	$registeredby=$_SESSION['panobookingadminemail'];
	$taxesinclusive = $_POST['taxesinclusive'];
	$fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
	$newfilename = $place2 . '.' . 'jpg';
	$target = '../../../AndroidFiles/DestinationImages/';
	$fileTarget = $target . $newfilename;
	$tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName, $fileTarget);
	$imageurl = "https://panobooking.com/AndroidFiles/DestinationImages";
	
	$newfetch = "SELECT City FROM `destinations` WHERE City = '" . $city . "'";
	$result4 = mysqli_query($link, $newfetch);
	$row2 = mysqli_fetch_row($result4);
	if (mysqli_num_rows($result4) >= 1) {
	} else {
		$query3 = "INSERT INTO `destinations` (Country,Region,City) VALUES('$country','$region','$city')";
		$result3 = mysqli_query($link, $query3);
	}
	$query2 = "INSERT INTO `pickuplocations` (Country,City,Place,Rating,Prices,PriceSpecifications,Comment,Prepayment,EmailAddress,ContactNo,TaxesInclusive,PhotoUrl,PlaceType,RegisteredBy,coordinates ) VALUES('$country','$city','$place','$ratings','$leastprice','$leastpricedes','$leastpricecom','$paymentoption','$emailaddress','$phone','$taxesinclusive','1','$placetype','$registeredby','$maps')";
	$result2 = mysqli_query($link, $query2);

	if ($result2) {
		echo '<script type="application/javascript">';
		echo 'alert("Destination successfully registered");';
		echo 'window.location.href="../forms/AddDestination.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Destination registration Failed");';
		echo 'window.location.href="../forms/AddDestination.php";';
		echo '</script>';
	}
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Error occured and i am un able to correct it");';
	echo 'window.location.href="../forms/AddDestination.php";';
	echo '</script>';
	die;
}
