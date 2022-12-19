<?php session_start();
if (isset($_SESSION['panobookingadminuser'])) {
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Login First");';
	echo 'window.location.href="../../index.php";';
	echo '</script>';
}
if (isset($_REQUEST['insertpackagesubmit'])) {
	require_once('../../connect/connect.php');
	// getting inputs from the form	
	$country = mysqli_real_escape_string($link,$_POST['country']);
	$city = mysqli_real_escape_string($link,$_POST['city']);
	$tourguide =  mysqli_real_escape_string($link,$_POST['tourguide']);
	$packagename = mysqli_real_escape_string($link,$_POST['packagename']);
	$traveldate=mysqli_real_escape_string($link,$_POST['traveldate']);
	$travelhours=mysqli_real_escape_string($link,$_POST['travelhours']);
	$noofdays = mysqli_real_escape_string($link,$_POST['noofdays']);
	$emailaddress = mysqli_real_escape_string($link,$_POST['emailaddress']);
	$phone = mysqli_real_escape_string($link,$_POST['phone']);
	$leastpricedes = mysqli_real_escape_string($link,$_POST['leastprice']);
	$companypercentage = mysqli_real_escape_string($link,$_POST['companypercentage']);
	$packagefees2 = $leastpricedes+(($companypercentage/100)*mysqli_real_escape_string($link,$_POST['leastprice']));
	$paymentoption = mysqli_real_escape_string($link,$_POST['paymentoption']);
	$searchkeywords = mysqli_real_escape_string($link,$_POST['searchkeywords']);
	$articledetails = mysqli_real_escape_string($link,$_POST['articledetails']);
	$destinations = mysqli_real_escape_string($link,$_POST['destinations']);
	$shortdescription = mysqli_real_escape_string($link,$_POST['shortdescription']);
	$registeredby=$_SESSION['panobookingadminemail'];
	$fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
	$newfilename = $tourguide .$packagename. '.' . 'jpg';
	$target = '../../../AndroidFiles/TourPackages/';
	$fileTarget = $target . $newfilename;
	$tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName, $fileTarget);
	$imageurl = "https://panobooking.com/AndroidFiles/TourPackages";
	
	$query2 = "INSERT INTO `tourpackage` (Country,City,TravelCompany,PackageName,TravelDate,TravelHours,DestinationsVisted,TripDays,ServicesOffered,ExtraActivites,PackageFee,SearchTerms,TelephoneNumber,PhotoUri,EmailAddress,PackageFees2,CompanyPercent) 
	VALUES('$country','$city','$tourguide','$packagename','$traveldate','$travelhours','$destinations','$noofdays','$articledetails','$shortdescription','$leastpricedes','$searchkeywords','$phone','1','$emailaddress','$packagefees2','$companypercentage')";
	$result2 = mysqli_query($link, $query2);

	if ($result2) {
		echo '<script type="application/javascript">';
		echo 'alert("Package successfully registered");';
		echo 'window.location.href="../forms/AddTourismPackage.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Package registration Failed");';
		echo 'window.location.href="../forms/AddTourismPackage.php";';
		echo '</script>';
	}
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Error occured and i am un able to correct it");';
	echo 'window.location.href="../forms/AddTourismPackage.php";';
	echo '</script>';
	die;
}
