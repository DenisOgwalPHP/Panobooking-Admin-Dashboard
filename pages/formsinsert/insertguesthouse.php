<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
		}
if(isset($_REQUEST['guesthousesubmit']))
{	
// getting inputs from the form	
	$country=$_POST['country'];
	$city = $_POST['city'];
	//$region = $_POST['region'];
	$place = $_POST['place'];
	$guesthousename = $_POST['guesthousename'];
	$ratings=$_POST['ratings'];
	$leastprice = $_POST['leastprice'];
	$leastprices = $leastprice+(0.05*$leastprice);
	$leastpricedes=$_POST['leastpricedes'];
    $leastpricecom = $_POST['leastpricecom'];
	$paymentoption = $_POST['paymentoption'];
	$emailaddress = $_POST['emailaddress'];
	$phone = $_POST['phone'];
	$taxesinclusive=$_POST['taxesinclusive'];
	$exactlocation=$_POST['exactlocation'];
	$coordinates=$_POST['coordinates'];
	$facilities=$_POST['facilities'];
    $fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename =$guesthousename. '.' . 'jpg';
	$target = '../../../AndroidFiles/GuestHouseImages/';
	$fileTarget = $target.$newfilename; 
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName,$fileTarget);
	$imageurl="https://panobooking.com/AndroidFiles/GuestHouseImages";	
	require_once('../../connect/connect.php');
	$newfetch = "SELECT City FROM `homeguestlocations` WHERE City = '" . $city . "'";
	$result4 = mysqli_query($link, $newfetch);
	$row2 = mysqli_fetch_row($result4);
	if (mysqli_num_rows($result4) >= 1) {
	} else {
	$query3 = "INSERT INTO `homeguestlocations` (Country,Place,City) VALUES('$country','$place','$city')";
	$result3=mysqli_query($link,$query3);
	}
	$query2 = "INSERT INTO `homeguesthouses` (Country,City,Place,Rating,Prices,PriceSpecifications,Comment,Prepayment,EmailAddress,TelephoneNumber,TaxesInclusive,GuestHouseName,ExactLocation,Coordinates,Facilities,PhotoUrl,Price) VALUES('$country','$city','$place','$ratings','$leastprice','$leastpricedes','$leastpricecom','$paymentoption','$emailaddress','$phone','$taxesinclusive','$guesthousename','$exactlocation','$coordinates','$facilities','1','$leastprices')";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Guest House successfully registered");';
				echo'window.location.href="../forms/AddGuestHouses.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Guest House registration Failed");';
				echo'window.location.href="../forms/AddGuestHouses.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/AddGuestHouses.php";';
				echo '</script>';
			die;
}
?>