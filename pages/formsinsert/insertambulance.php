<?php session_start();
if (isset($_SESSION['panobookingadminuser'])) {
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Login First");';
	echo 'window.location.href="../../index.php";';
	echo '</script>';
}
if (isset($_REQUEST['taxissubmit'])) {
	// getting inputs from the form	
	$carregno = $_POST['carregno'];
	$carspec = $_POST['carspec'];
	//$ratings = $_POST['ratings'];
	$drivername = $_POST['drivername'];
	//$driverage = $_POST['driverage'];
	//$rentalprice = $_POST['rentalprice']+(0.05*$_POST['rentalprice']);
	$address = $_POST['address'];
	$paymentoption = $_POST['paymentoption'];
	$emailaddress = $_POST['emailaddress'];
	$phone = $_POST['phone'];
	$fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
	$newfilename = $carregno . '.' . 'jpg';
	$target = '../../../AndroidDriver/FileUpload/';
	$fileTarget = $target . $newfilename;
	$tempFileName = $_FILES["Filename"]["tmp_name"];
	//$result = move_uploaded_file($tempFileName,$fileTarget);
	$imageurl = "https://panobooking.com/AndroidDriver/FileUpload";
	require_once('../../connect/connect.php');

	$query2 = "INSERT INTO `ambulances` (DriverName,TaxiNo,CarSpec,Repayments,CurrentLocation,EmailAddress,TelephoneNumber,PhotoUri) VALUES('$drivername','$carregno','$carspec','$paymentoption','$address','$emailaddress','$phone','1')";
	$result2 = mysqli_query($link, $query2);

	if ($result2) {
		echo '<script type="application/javascript">';
		echo 'alert("Ambulance successfully registered");';
		echo 'window.location.href="../forms/AddAmbulance.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Ambulance registration Failed");';
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
