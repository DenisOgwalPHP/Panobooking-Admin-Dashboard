<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
		}
if(isset($_REQUEST['destinationssubmit']))
{	
// getting inputs from the form	
	$country=$_POST['country'];
	$city = $_POST['city'];
	$region = $_POST['region'];
	$place = $_POST['place'];
	$ratings=$_POST['ratings'];
	$leastprice = $_POST['leastprice'];
	$leastpricedes=$_POST['leastpricedes'];
    $leastpricecom = $_POST['leastpricecom'];
	$paymentoption = $_POST['paymentoption'];
	$emailaddress = $_POST['emailaddress'];
	$phone = $_POST['phone'];
	$taxesinclusive=$_POST['taxesinclusive'];
    $fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename =$place. '.' . 'jpg';
	$target = '../../../AndroidFiles/DestinationImages/';
	$fileTarget = $target.$newfilename; 
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName,$fileTarget); 
	$imageurl="https://panobooking.com/AndroidFiles/DestinationImages";
	require_once('../../connect/connect.php');
	
	$query3 = "INSERT INTO `destinations` (Country,Region,City) VALUES('$country','$region','$city')";
	$result3=mysqli_query($link,$query3);
	
	$query2 = "INSERT INTO `pickuplocations` (Country,City,Place,Rating,Prices,PriceSpecifications,Comment,Prepayment,EmailAddress,ContactNo,TaxesInclusive,PhotoUrl) VALUES('$country','$city','$place','$ratings','$leastprice','$leastpricedes','$leastpricecom','$paymentoption','$emailaddress','$phone','$taxesinclusive','1')";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Destination successfully registered");';
				echo'window.location.href="../forms/AddDestination.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Destination registration Failed");';
				echo'window.location.href="../forms/AddDestination.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/AddDestination.php";';
				echo '</script>';
			die;
}
?>